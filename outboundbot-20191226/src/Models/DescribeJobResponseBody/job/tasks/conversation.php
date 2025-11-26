<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobResponseBody\job\tasks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobResponseBody\job\tasks\conversation\summary;

class conversation extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
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
     * @var string
     */
    public $speaker;

    /**
     * @var summary[]
     */
    public $summary;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'action' => 'Action',
        'actionParams' => 'ActionParams',
        'script' => 'Script',
        'sequenceId' => 'SequenceId',
        'speaker' => 'Speaker',
        'summary' => 'Summary',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->summary)) {
            Model::validateArray($this->summary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->summary)) {
                $res['Summary'] = [];
                $n1 = 0;
                foreach ($this->summary as $item1) {
                    $res['Summary'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Summary'] as $item1) {
                    $model->summary[$n1] = summary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
