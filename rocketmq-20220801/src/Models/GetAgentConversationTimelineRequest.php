<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class GetAgentConversationTimelineRequest extends Model
{
    /**
     * @var int
     */
    public $after;

    /**
     * @var bool
     */
    public $includeImageData;
    protected $_name = [
        'after' => 'after',
        'includeImageData' => 'includeImageData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->after) {
            $res['after'] = $this->after;
        }

        if (null !== $this->includeImageData) {
            $res['includeImageData'] = $this->includeImageData;
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
        if (isset($map['after'])) {
            $model->after = $map['after'];
        }

        if (isset($map['includeImageData'])) {
            $model->includeImageData = $map['includeImageData'];
        }

        return $model;
    }
}
