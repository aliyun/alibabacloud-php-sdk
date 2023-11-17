<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models;

use AlibabaCloud\Tea\Model;

class UnbindDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $identityId;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $openId;

    /**
     * @var string
     */
    public $openIdAppKey;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var bool
     */
    public $unbindSubDevice;
    protected $_name = [
        'deviceName'      => 'DeviceName',
        'identityId'      => 'IdentityId',
        'iotId'           => 'IotId',
        'openId'          => 'OpenId',
        'openIdAppKey'    => 'OpenIdAppKey',
        'productKey'      => 'ProductKey',
        'unbindSubDevice' => 'UnbindSubDevice',
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
        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->openId) {
            $res['OpenId'] = $this->openId;
        }
        if (null !== $this->openIdAppKey) {
            $res['OpenIdAppKey'] = $this->openIdAppKey;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->unbindSubDevice) {
            $res['UnbindSubDevice'] = $this->unbindSubDevice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['OpenId'])) {
            $model->openId = $map['OpenId'];
        }
        if (isset($map['OpenIdAppKey'])) {
            $model->openIdAppKey = $map['OpenIdAppKey'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['UnbindSubDevice'])) {
            $model->unbindSubDevice = $map['UnbindSubDevice'];
        }

        return $model;
    }
}
