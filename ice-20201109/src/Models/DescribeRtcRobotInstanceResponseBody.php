<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeRtcRobotInstanceResponseBody\config;
use AlibabaCloud\Tea\Model;

class DescribeRtcRobotInstanceResponseBody extends Model
{
    /**
     * @example **********
     *
     * @var string
     */
    public $authToken;

    /**
     * @example testId
     *
     * @var string
     */
    public $channelId;

    /**
     * @var config
     */
    public $config;

    /**
     * @description Id of the request
     *
     * @example 20B3A1B6-4BD2-5DE6-BCBC-098C9B4F4E91
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Executing
     *
     * @var string
     */
    public $status;

    /**
     * @example {}
     *
     * @var string
     */
    public $userData;

    /**
     * @example my-robot
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeRtcRobotInstanceResponseBody
     */
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
