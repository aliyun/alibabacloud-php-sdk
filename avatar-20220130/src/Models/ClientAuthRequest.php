<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models;

use AlibabaCloud\Tea\Model;

class ClientAuthRequest extends Model
{
    /**
     * @example dsdsf1
     *
     * @var string
     */
    public $appId;

    /**
     * @example xxxxxx
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example {"xxxx":"xxxxxxxxxxx"}
     *
     * @var string
     */
    public $deviceInfo;

    /**
     * @example largeScreen
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example FqTyXFrIqbIGnb_oqIvszv1wffODnpCDNDvOc6xNXbAhak1AwsfrCo2cSrPFAhHEitOb9VEG
     *
     * @var string
     */
    public $license;

    /**
     * @example 9185
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'appId'      => 'AppId',
        'deviceId'   => 'DeviceId',
        'deviceInfo' => 'DeviceInfo',
        'deviceType' => 'DeviceType',
        'license'    => 'License',
        'tenantId'   => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = $this->deviceInfo;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->license) {
            $res['License'] = $this->license;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ClientAuthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = $map['DeviceInfo'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['License'])) {
            $model->license = $map['License'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
