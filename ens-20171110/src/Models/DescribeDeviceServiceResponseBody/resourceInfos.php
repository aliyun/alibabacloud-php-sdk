<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos\deviceInfos;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos\internalIps;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos\publicIps;

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
        'appVersion' => 'AppVersion',
        'areaCode' => 'AreaCode',
        'areaName' => 'AreaName',
        'createTime' => 'CreateTime',
        'deviceInfos' => 'DeviceInfos',
        'instanceId' => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'internalIps' => 'InternalIps',
        'publicIps' => 'PublicIps',
        'regionCode' => 'RegionCode',
        'regionId' => 'RegionId',
        'regionName' => 'RegionName',
    ];

    public function validate()
    {
        if (\is_array($this->deviceInfos)) {
            Model::validateArray($this->deviceInfos);
        }
        if (\is_array($this->internalIps)) {
            Model::validateArray($this->internalIps);
        }
        if (\is_array($this->publicIps)) {
            Model::validateArray($this->publicIps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->deviceInfos)) {
                $res['DeviceInfos'] = [];
                $n1 = 0;
                foreach ($this->deviceInfos as $item1) {
                    $res['DeviceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->internalIps)) {
                $res['InternalIps'] = [];
                $n1 = 0;
                foreach ($this->internalIps as $item1) {
                    $res['InternalIps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publicIps) {
            if (\is_array($this->publicIps)) {
                $res['PublicIps'] = [];
                $n1 = 0;
                foreach ($this->publicIps as $item1) {
                    $res['PublicIps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['DeviceInfos'] as $item1) {
                    $model->deviceInfos[$n1] = deviceInfos::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['InternalIps'] as $item1) {
                    $model->internalIps[$n1] = internalIps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PublicIps'])) {
            if (!empty($map['PublicIps'])) {
                $model->publicIps = [];
                $n1 = 0;
                foreach ($map['PublicIps'] as $item1) {
                    $model->publicIps[$n1] = publicIps::fromMap($item1);
                    ++$n1;
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
