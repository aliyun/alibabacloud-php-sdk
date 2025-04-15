<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos;

use AlibabaCloud\Dara\Model;

class deadLetterInfo extends Model
{
    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $toDlqTime;

    /**
     * @var string
     */
    public $topicName;
    protected $_name = [
        'messageId' => 'messageId',
        'toDlqTime' => 'toDlqTime',
        'topicName' => 'topicName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->toDlqTime) {
            $res['toDlqTime'] = $this->toDlqTime;
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
        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['toDlqTime'])) {
            $model->toDlqTime = $map['toDlqTime'];
        }

        if (isset($map['topicName'])) {
            $model->topicName = $map['topicName'];
        }

        return $model;
    }
}
