<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GenerateAIAgentCallResponseBody extends Model
{
    /**
     * @description The username of the AI agent in the Alibaba Real-Time Communication (ARTC) channel.
     *
     * @example 877ae632caae49b1afc81c2e8194ffb4
     *
     * @var string
     */
    public $AIAgentUserId;

    /**
     * @description The ARTC channel ID.
     *
     * @example 70f22d5784194938a7e387052f2b3208
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The ID of the AI agent.
     *
     * @example 39f8e0bc005e4f309379701645f4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The request ID.
     *
     * @example 7B117AF5-2A16-412C-B127-FA6175ED1AD0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ARTC token of the client.
     *
     * @example eyJhcHBpZCI6ICIxMjM0MTIzNxxxxx
     *
     * @var string
     */
    public $token;

    /**
     * @description The username in the ARTC channel.
     *
     * @example user123
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GenerateAIAgentCallResponseBody
     */
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
