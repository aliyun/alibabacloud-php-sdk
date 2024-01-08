<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateGbDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $deviceType;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $mediaNetProtocol;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $subProductKey;
    protected $_name = [
        'description'      => 'Description',
        'deviceType'       => 'DeviceType',
        'gbId'             => 'GbId',
        'iotInstanceId'    => 'IotInstanceId',
        'mediaNetProtocol' => 'MediaNetProtocol',
        'password'         => 'Password',
        'productKey'       => 'ProductKey',
        'subProductKey'    => 'SubProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->mediaNetProtocol) {
            $res['MediaNetProtocol'] = $this->mediaNetProtocol;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->subProductKey) {
            $res['SubProductKey'] = $this->subProductKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGbDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['MediaNetProtocol'])) {
            $model->mediaNetProtocol = $map['MediaNetProtocol'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SubProductKey'])) {
            $model->subProductKey = $map['SubProductKey'];
        }

        return $model;
    }
}
