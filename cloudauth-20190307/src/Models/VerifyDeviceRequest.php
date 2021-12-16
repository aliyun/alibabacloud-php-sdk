<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class VerifyDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $certifyData;

    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $deviceToken;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appVersion'  => 'AppVersion',
        'certifyData' => 'CertifyData',
        'certifyId'   => 'CertifyId',
        'deviceToken' => 'DeviceToken',
        'extInfo'     => 'ExtInfo',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->certifyData) {
            $res['CertifyData'] = $this->certifyData;
        }
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }
        if (null !== $this->deviceToken) {
            $res['DeviceToken'] = $this->deviceToken;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['CertifyData'])) {
            $model->certifyData = $map['CertifyData'];
        }
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }
        if (isset($map['DeviceToken'])) {
            $model->deviceToken = $map['DeviceToken'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
