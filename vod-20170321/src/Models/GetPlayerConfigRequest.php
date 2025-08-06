<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetPlayerConfigRequest extends Model
{
    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $authInfo;

    /**
     * @var int
     */
    public $authTimestamp;

    /**
     * @var string
     */
    public $deviceBrand;

    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $osName;

    /**
     * @var string
     */
    public $reserved;

    /**
     * @var string
     */
    public $rule;
    protected $_name = [
        'apiVersion' => 'ApiVersion',
        'authInfo' => 'AuthInfo',
        'authTimestamp' => 'AuthTimestamp',
        'deviceBrand' => 'DeviceBrand',
        'deviceModel' => 'DeviceModel',
        'osName' => 'OsName',
        'reserved' => 'Reserved',
        'rule' => 'Rule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }

        if (null !== $this->authInfo) {
            $res['AuthInfo'] = $this->authInfo;
        }

        if (null !== $this->authTimestamp) {
            $res['AuthTimestamp'] = $this->authTimestamp;
        }

        if (null !== $this->deviceBrand) {
            $res['DeviceBrand'] = $this->deviceBrand;
        }

        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }

        if (null !== $this->osName) {
            $res['OsName'] = $this->osName;
        }

        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }

        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
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
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }

        if (isset($map['AuthInfo'])) {
            $model->authInfo = $map['AuthInfo'];
        }

        if (isset($map['AuthTimestamp'])) {
            $model->authTimestamp = $map['AuthTimestamp'];
        }

        if (isset($map['DeviceBrand'])) {
            $model->deviceBrand = $map['DeviceBrand'];
        }

        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }

        if (isset($map['OsName'])) {
            $model->osName = $map['OsName'];
        }

        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }

        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        return $model;
    }
}
