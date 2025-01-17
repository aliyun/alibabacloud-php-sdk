<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class GenerateAIAgentCallResponseBody extends Model
{
    /**
     * @var string
     */
    public $AIAgentUserId;
    /**
     * @var string
     */
    public $channelId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $token;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'AIAgentUserId' => 'AIAgentUserId',
        'channelId'     => 'ChannelId',
        'instanceId'    => 'InstanceId',
        'requestId'     => 'RequestId',
        'token'         => 'Token',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIAgentUserId) {
            $res['AIAgentUserId'] = $this->AIAgentUserId;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AIAgentUserId'])) {
            $model->AIAgentUserId = $map['AIAgentUserId'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
