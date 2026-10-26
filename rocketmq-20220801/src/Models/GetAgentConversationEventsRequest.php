<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class GetAgentConversationEventsRequest extends Model
{
    /**
     * @var int
     */
    public $after;
    protected $_name = [
        'after' => 'after',
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

        return $model;
    }
}
