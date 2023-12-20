<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateRtmpKeyRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $pullAuthKey;

    /**
     * @var int
     */
    public $pullKeyExpireTime;

    /**
     * @var string
     */
    public $pushAuthKey;

    /**
     * @var int
     */
    public $pushKeyExpireTime;
    protected $_name = [
        'deviceName'        => 'DeviceName',
        'iotId'             => 'IotId',
        'iotInstanceId'     => 'IotInstanceId',
        'productKey'        => 'ProductKey',
        'pullAuthKey'       => 'PullAuthKey',
        'pullKeyExpireTime' => 'PullKeyExpireTime',
        'pushAuthKey'       => 'PushAuthKey',
        'pushKeyExpireTime' => 'PushKeyExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->pullAuthKey) {
            $res['PullAuthKey'] = $this->pullAuthKey;
        }
        if (null !== $this->pullKeyExpireTime) {
            $res['PullKeyExpireTime'] = $this->pullKeyExpireTime;
        }
        if (null !== $this->pushAuthKey) {
            $res['PushAuthKey'] = $this->pushAuthKey;
        }
        if (null !== $this->pushKeyExpireTime) {
            $res['PushKeyExpireTime'] = $this->pushKeyExpireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRtmpKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['PullAuthKey'])) {
            $model->pullAuthKey = $map['PullAuthKey'];
        }
        if (isset($map['PullKeyExpireTime'])) {
            $model->pullKeyExpireTime = $map['PullKeyExpireTime'];
        }
        if (isset($map['PushAuthKey'])) {
            $model->pushAuthKey = $map['PushAuthKey'];
        }
        if (isset($map['PushKeyExpireTime'])) {
            $model->pushKeyExpireTime = $map['PushKeyExpireTime'];
        }

        return $model;
    }
}
