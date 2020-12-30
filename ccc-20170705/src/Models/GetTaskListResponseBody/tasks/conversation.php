<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetTaskListResponseBody\tasks;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetTaskListResponseBody\tasks\conversation\summary;
use AlibabaCloud\Tea\Model;

class conversation extends Model
{
    /**
     * @var summary[]
     */
    public $summary;

    /**
     * @var string
     */
    public $speaker;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $script;
    protected $_name = [
        'summary'   => 'Summary',
        'speaker'   => 'Speaker',
        'timestamp' => 'Timestamp',
        'script'    => 'Script',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->summary) {
            $res['Summary'] = [];
            if (null !== $this->summary && \is_array($this->summary)) {
                $n = 0;
                foreach ($this->summary as $item) {
                    $res['Summary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->speaker) {
            $res['Speaker'] = $this->speaker;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
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
        if (isset($map['Summary'])) {
            if (!empty($map['Summary'])) {
                $model->summary = [];
                $n              = 0;
                foreach ($map['Summary'] as $item) {
                    $model->summary[$n++] = null !== $item ? summary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Speaker'])) {
            $model->speaker = $map['Speaker'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
