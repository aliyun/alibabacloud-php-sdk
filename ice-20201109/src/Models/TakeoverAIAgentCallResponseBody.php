<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class TakeoverAIAgentCallResponseBody extends Model
{
    /**
     * @var string
     */
    public $channelId;
    /**
     * @var string
     */
    public $humanAgentUserId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'channelId'        => 'ChannelId',
        'humanAgentUserId' => 'HumanAgentUserId',
        'requestId'        => 'RequestId',
        'token'            => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->humanAgentUserId) {
            $res['HumanAgentUserId'] = $this->humanAgentUserId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['HumanAgentUserId'])) {
            $model->humanAgentUserId = $map['HumanAgentUserId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
