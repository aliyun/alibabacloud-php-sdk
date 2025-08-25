<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\PushQueryDeviceStateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deliveryToken;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $manufacturer;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $statue;

    /**
     * @var string
     */
    public $thirdToken;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'deliveryToken' => 'DeliveryToken',
        'deviceId' => 'DeviceId',
        'manufacturer' => 'Manufacturer',
        'platform' => 'Platform',
        'statue' => 'Statue',
        'thirdToken' => 'ThirdToken',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryToken) {
            $res['DeliveryToken'] = $this->deliveryToken;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->manufacturer) {
            $res['Manufacturer'] = $this->manufacturer;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->statue) {
            $res['Statue'] = $this->statue;
        }

        if (null !== $this->thirdToken) {
            $res['ThirdToken'] = $this->thirdToken;
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
        if (isset($map['DeliveryToken'])) {
            $model->deliveryToken = $map['DeliveryToken'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['Manufacturer'])) {
            $model->manufacturer = $map['Manufacturer'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['Statue'])) {
            $model->statue = $map['Statue'];
        }

        if (isset($map['ThirdToken'])) {
            $model->thirdToken = $map['ThirdToken'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
