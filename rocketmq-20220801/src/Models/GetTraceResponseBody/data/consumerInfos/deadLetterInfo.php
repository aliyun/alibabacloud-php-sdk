<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetTraceResponseBody\data\consumerInfos;

use AlibabaCloud\Tea\Model;

class deadLetterInfo extends Model
{
    /**
     * @example 7F000001001F7A4F0F29463F0376047D
     *
     * @var string
     */
    public $messageId;

    /**
     * @example 2023-03-22 12:17:08
     *
     * @var string
     */
    public $toDlqTime;

    /**
     * @example Register_Sync
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return deadLetterInfo
     */
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
