<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class TakeoverAIAgentCallResponseBody extends Model
{
    /**
     * @example 70f22d5784194938a7e387052f2b3208
     *
     * @var string
     */
    public $channelId;

    /**
     * @example uid2
     *
     * @var string
     */
    public $humanAgentUserId;

    /**
     * @example ******3B-0E1A-586A-AC29-742247******
     *
     * @var string
     */
    public $requestId;

    /**
     * @example eyJhcHBpZCI6ICIxMjM0MTIzNxxxxx
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return TakeoverAIAgentCallResponseBody
     */
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
