<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryAuthenticationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $apkPubkey;
    /**
     * @var string
     */
    public $beginTime;
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $deviceName;
    /**
     * @var string
     */
    public $expiredTime;
    /**
     * @var string
     */
    public $iotId;
    /**
     * @var int
     */
    public $licenseType;
    /**
     * @var string
     */
    public $packageName;
    /**
     * @var string
     */
    public $productKey;
    protected $_name = [
        'apkPubkey'   => 'ApkPubkey',
        'beginTime'   => 'BeginTime',
        'clientId'    => 'ClientId',
        'deviceName'  => 'DeviceName',
        'expiredTime' => 'ExpiredTime',
        'iotId'       => 'IotId',
        'licenseType' => 'LicenseType',
        'packageName' => 'PackageName',
        'productKey'  => 'ProductKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apkPubkey) {
            $res['ApkPubkey'] = $this->apkPubkey;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }

        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
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
        if (isset($map['ApkPubkey'])) {
            $model->apkPubkey = $map['ApkPubkey'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }

        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
