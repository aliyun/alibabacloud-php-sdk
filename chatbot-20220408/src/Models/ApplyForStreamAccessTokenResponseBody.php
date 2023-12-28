<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class ApplyForStreamAccessTokenResponseBody extends Model
{
    /**
     * @example 63ba97b4f18a4a04f715c81e8e643938
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example cc9e88c0-4f41-4f1d-a1a9-91a72d2aa27d
     *
     * @var string
     */
    public $channelId;

    /**
     * @description Id of the request
     *
     * @example 736994BD-AA35-4742-88C9-E64BE4BAA14B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example cc9e88c0-4f41-4f1d-a1a9-91a72d2aa27d
     *
     * @var string
     */
    public $streamSecret;
    protected $_name = [
        'accessToken'  => 'AccessToken',
        'channelId'    => 'ChannelId',
        'requestId'    => 'RequestId',
        'streamSecret' => 'StreamSecret',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ApplyForStreamAccessTokenResponseBody
     */
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
