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
     * @description The version of the application.
     *
     * @example v1
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description The area code.
     *
     * @example 410800
     *
     * @var string
     */
    public $areaCode;

    /**
     * @description The region name.
     *
     * @example Jiaozuo City, Henan Province, Central China
     *
     * @var string
     */
    public $areaName;

    /**
     * @description The time when the application was created.
     *
     * @example 2019-10-02T08:26Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The information about the devices.
     *
     * @var deviceInfos[]
     */
    public $deviceInfos;

    /**
     * @description The ID of the instance.
     *
     * @example i-5s9boobrmh5000kv4jmi0oeai
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the instance.
     *
     * @example Running
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The internal IP addresses.
     *
     * @var internalIps[]
     */
    public $internalIps;

    /**
     * @description The public IP addresses.
     *
     * @var publicIps[]
     */
    public $publicIps;

    /**
     * @description The ID of the region.
     *
     * @example cn-jiaozuo-2
     *
     * @var string
     */
    public $regionCode;

    /**
     * @description The ID of the ENS node.
     *
     * @example cn-jiaozuo-2
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region.
     *
     * @example China Jiaozuo-2
     *
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
