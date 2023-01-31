<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobResponseBody\job\tasks;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobResponseBody\job\tasks\conversation\summary;
use AlibabaCloud\Tea\Model;

class conversation extends Model
{
    /**
     * @example Broadcast
     *
     * @var string
     */
    public $action;

    /**
     * @example {}
     *
     * @var string
     */
    public $actionParams;

    /**
     * @var string
     */
    public $script;

    /**
     * @var string
     */
    public $sequenceId;

    /**
     * @example Robot
     *
     * @var string
     */
    public $speaker;

    /**
     * @example []
     *
     * @var summary[]
     */
    public $summary;

    /**
     * @example 1579068424883
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'action'       => 'Action',
        'actionParams' => 'ActionParams',
        'script'       => 'Script',
        'sequenceId'   => 'SequenceId',
        'speaker'      => 'Speaker',
        'summary'      => 'Summary',
        'timestamp'    => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->actionParams) {
            $res['ActionParams'] = $this->actionParams;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->sequenceId) {
            $res['SequenceId'] = $this->sequenceId;
        }
        if (null !== $this->speaker) {
            $res['Speaker'] = $this->speaker;
        }
        if (null !== $this->summary) {
            $res['Summary'] = [];
            if (null !== $this->summary && \is_array($this->summary)) {
                $n = 0;
                foreach ($this->summary as $item) {
                    $res['Summary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conversation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ActionParams'])) {
            $model->actionParams = $map['ActionParams'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['SequenceId'])) {
            $model->sequenceId = $map['SequenceId'];
        }
        if (isset($map['Speaker'])) {
            $model->speaker = $map['Speaker'];
        }
        if (isset($map['Summary'])) {
            if (!empty($map['Summary'])) {
                $model->summary = [];
                $n              = 0;
                foreach ($map['Summary'] as $item) {
                    $model->summary[$n++] = null !== $item ? summary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
