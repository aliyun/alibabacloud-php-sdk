<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DescribeInstanceAttributeResponseBody;

use AlibabaCloud\SDK\Yundundbaudit\V20210416\Models\DescribeInstanceAttributeResponseBody\instanceAttribute\instanceConnections;
use AlibabaCloud\Tea\Model;

class instanceAttribute extends Model
{
    /**
     * @var int
     */
    public $instancePurchaseStorage;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $instanceTotalStorage;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceConnectionQuota;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $instanceDatabaseQuota;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $seriesCode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $licenseCode;

    /**
     * @var int
     */
    public $instanceConnectionMaxBandwidth;

    /**
     * @var instanceConnections[]
     */
    public $instanceConnections;
    protected $_name = [
        'instancePurchaseStorage'        => 'InstancePurchaseStorage',
        'expireTime'                     => 'ExpireTime',
        'instanceTotalStorage'           => 'InstanceTotalStorage',
        'imageVersion'                   => 'ImageVersion',
        'instanceId'                     => 'InstanceId',
        'instanceConnectionQuota'        => 'InstanceConnectionQuota',
        'regionId'                       => 'RegionId',
        'instanceDatabaseQuota'          => 'InstanceDatabaseQuota',
        'startTime'                      => 'StartTime',
        'seriesCode'                     => 'SeriesCode',
        'description'                    => 'Description',
        'instanceStatus'                 => 'InstanceStatus',
        'licenseCode'                    => 'LicenseCode',
        'instanceConnectionMaxBandwidth' => 'InstanceConnectionMaxBandwidth',
        'instanceConnections'            => 'InstanceConnections',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instancePurchaseStorage) {
            $res['InstancePurchaseStorage'] = $this->instancePurchaseStorage;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceTotalStorage) {
            $res['InstanceTotalStorage'] = $this->instanceTotalStorage;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceConnectionQuota) {
            $res['InstanceConnectionQuota'] = $this->instanceConnectionQuota;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceDatabaseQuota) {
            $res['InstanceDatabaseQuota'] = $this->instanceDatabaseQuota;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->seriesCode) {
            $res['SeriesCode'] = $this->seriesCode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }
        if (null !== $this->instanceConnectionMaxBandwidth) {
            $res['InstanceConnectionMaxBandwidth'] = $this->instanceConnectionMaxBandwidth;
        }
        if (null !== $this->instanceConnections) {
            $res['InstanceConnections'] = [];
            if (null !== $this->instanceConnections && \is_array($this->instanceConnections)) {
                $n = 0;
                foreach ($this->instanceConnections as $item) {
                    $res['InstanceConnections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstancePurchaseStorage'])) {
            $model->instancePurchaseStorage = $map['InstancePurchaseStorage'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceTotalStorage'])) {
            $model->instanceTotalStorage = $map['InstanceTotalStorage'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceConnectionQuota'])) {
            $model->instanceConnectionQuota = $map['InstanceConnectionQuota'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceDatabaseQuota'])) {
            $model->instanceDatabaseQuota = $map['InstanceDatabaseQuota'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SeriesCode'])) {
            $model->seriesCode = $map['SeriesCode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }
        if (isset($map['InstanceConnectionMaxBandwidth'])) {
            $model->instanceConnectionMaxBandwidth = $map['InstanceConnectionMaxBandwidth'];
        }
        if (isset($map['InstanceConnections'])) {
            if (!empty($map['InstanceConnections'])) {
                $model->instanceConnections = [];
                $n                          = 0;
                foreach ($map['InstanceConnections'] as $item) {
                    $model->instanceConnections[$n++] = null !== $item ? instanceConnections::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
