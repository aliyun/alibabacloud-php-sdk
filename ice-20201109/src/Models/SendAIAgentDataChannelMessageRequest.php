<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SendAIAgentDataChannelMessageRequest extends Model
{
    /**
     * @description The ID of the AI agent in the conversation.
     *
     * This parameter is required.
     *
     * @example 39f8e0bc005e4f309379701645f4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The DataChannel message you want to send. You must specify a JSON string. The value can be up to 8,192 characters in length.
     *
     * This parameter is required.
     *
     * @example {"key":"value"}
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'message' => 'Message',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendAIAgentDataChannelMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
