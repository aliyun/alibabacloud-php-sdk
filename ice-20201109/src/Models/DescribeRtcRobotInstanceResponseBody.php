<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeRtcRobotInstanceResponseBody\config;

class DescribeRtcRobotInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $authToken;
    /**
     * @var string
     */
    public $channelId;
    /**
     * @var config
     */
    public $config;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $userData;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'authToken' => 'AuthToken',
        'channelId' => 'ChannelId',
        'config'    => 'Config',
        'requestId' => 'RequestId',
        'status'    => 'Status',
        'userData'  => 'UserData',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->config) {
            $this->config->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toArray($noStream) : $this->config;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['AuthToken'])) {
            $model->authToken = $map['AuthToken'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
