<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class ApplyForStreamAccessTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $streamSecret;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'channelId' => 'ChannelId',
        'requestId' => 'RequestId',
        'streamSecret' => 'StreamSecret',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->streamSecret) {
            $res['StreamSecret'] = $this->streamSecret;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StreamSecret'])) {
            $model->streamSecret = $map['StreamSecret'];
        }

        return $model;
    }
}
