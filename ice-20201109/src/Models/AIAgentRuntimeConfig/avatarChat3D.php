<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentRuntimeConfig;

use AlibabaCloud\Dara\Model;

class avatarChat3D extends Model
{
    /**
     * @var string
     */
    public $agentUserId;
    /**
     * @var string
     */
    public $authToken;
    /**
     * @var string
     */
    public $channelId;
    protected $_name = [
        'agentUserId' => 'AgentUserId',
        'authToken'   => 'AuthToken',
        'channelId'   => 'ChannelId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentUserId) {
            $res['AgentUserId'] = $this->agentUserId;
        }

        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
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
        if (isset($map['AgentUserId'])) {
            $model->agentUserId = $map['AgentUserId'];
        }

        if (isset($map['AuthToken'])) {
            $model->authToken = $map['AuthToken'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        return $model;
    }
}
