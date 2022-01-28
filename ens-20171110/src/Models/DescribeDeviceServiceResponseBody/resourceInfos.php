<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos\deviceInfos;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos\internalIps;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos\publicIps;
use AlibabaCloud\Tea\Model;

class resourceInfos extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var string
     */
    public $areaName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var deviceInfos[]
     */
    public $deviceInfos;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var internalIps[]
     */
    public $internalIps;

    /**
     * @var publicIps[]
     */
    public $publicIps;

    /**
     * @var string
     */
    public $regionCode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;
    protected $_name = [
        'appVersion'     => 'AppVersion',
        'areaCode'       => 'AreaCode',
        'areaName'       => 'AreaName',
        'createTime'     => 'CreateTime',
        'deviceInfos'    => 'DeviceInfos',
        'instanceId'     => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'internalIps'    => 'InternalIps',
        'publicIps'      => 'PublicIps',
        'regionCode'     => 'RegionCode',
        'regionId'       => 'RegionId',
        'regionName'     => 'RegionName',
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
        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }
        if (null !== $this->areaName) {
            $res['AreaName'] = $this->areaName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deviceInfos) {
            $res['DeviceInfos'] = [];
            if (null !== $this->deviceInfos && \is_array($this->deviceInfos)) {
                $n = 0;
                foreach ($this->deviceInfos as $item) {
                    $res['DeviceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->internalIps) {
            $res['InternalIps'] = [];
            if (null !== $this->internalIps && \is_array($this->internalIps)) {
                $n = 0;
                foreach ($this->internalIps as $item) {
                    $res['InternalIps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->publicIps) {
            $res['PublicIps'] = [];
            if (null !== $this->publicIps && \is_array($this->publicIps)) {
                $n = 0;
                foreach ($this->publicIps as $item) {
                    $res['PublicIps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }
        if (isset($map['AreaName'])) {
            $model->areaName = $map['AreaName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeviceInfos'])) {
            if (!empty($map['DeviceInfos'])) {
                $model->deviceInfos = [];
                $n                  = 0;
                foreach ($map['DeviceInfos'] as $item) {
                    $model->deviceInfos[$n++] = null !== $item ? deviceInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InternalIps'])) {
            if (!empty($map['InternalIps'])) {
                $model->internalIps = [];
                $n                  = 0;
                foreach ($map['InternalIps'] as $item) {
                    $model->internalIps[$n++] = null !== $item ? internalIps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PublicIps'])) {
            if (!empty($map['PublicIps'])) {
                $model->publicIps = [];
                $n                = 0;
                foreach ($map['PublicIps'] as $item) {
                    $model->publicIps[$n++] = null !== $item ? publicIps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        return $model;
    }
}
