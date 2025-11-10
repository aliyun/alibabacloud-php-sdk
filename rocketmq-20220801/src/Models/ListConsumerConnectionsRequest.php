<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class ListConsumerConnectionsRequest extends Model
{
    /**
     * @var string
     */
    public $liteTopicName;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'liteTopicName' => 'liteTopicName',
        'topicName' => 'topicName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liteTopicName) {
            $res['liteTopicName'] = $this->liteTopicName;
        }

        if (null !== $this->topicName) {
            $res['topicName'] = $this->topicName;
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
        if (isset($map['liteTopicName'])) {
            $model->liteTopicName = $map['liteTopicName'];
        }

        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}
