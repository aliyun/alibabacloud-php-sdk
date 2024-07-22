<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ListConversationDetailsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example a2c26e67-5984-4935-984e-bcee52971993
     *
     * @var string
     */
    public $conversationId;

    /**
     * @description This parameter is required.
     *
     * @example 82b2eaae-ce5c-45f8-8231-f15b6b27e55c
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
     * @return ListConversationDetailsRequest
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
