<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DescribeConversationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 15608cce-36be-43d5-9361-178cbe64127b
     *
     * @var string
     */
    public $conversationId;

    /**
     * @description This parameter is required.
     *
     * @example 5daac920-d6c1-429f-a95f-2a798f5255b5
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'conversationId' => 'ConversationId',
        'instanceId'     => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConversationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
