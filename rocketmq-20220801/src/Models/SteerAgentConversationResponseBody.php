<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class SteerAgentConversationResponseBody extends Model
{
    /**
     * @var bool
     */
    public $accepted;

    /**
     * @var string
     */
    public $messageId;
    protected $_name = [
        'accepted' => 'accepted',
        'messageId' => 'messageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accepted) {
            $res['accepted'] = $this->accepted;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
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
        if (isset($map['accepted'])) {
            $model->accepted = $map['accepted'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        return $model;
    }
}
