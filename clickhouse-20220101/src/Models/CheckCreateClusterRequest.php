<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CheckCreateClusterRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description This parameter is required.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description This parameter is required.
     *
     * @example 200
     *
     * @var int
     */
    public $virtualWareHouseCacheStorage;

    /**
     * @description This parameter is required.
     *
     * @example n1.xlarge
     *
     * @var string
     */
    public $virtualWareHouseClass;

    /**
     * @example test
     *
     * @var string
     */
    public $virtualWareHouseDescription;

    /**
     * @description VPC ID。
     *
     * This parameter is required.
     * @example vpc-uf6xmupdn7v6ui9f7****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description This parameter is required.
     *
     * @example vsw-uf632qye9oqt4x4sr5****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'                    => 'AutoRenew',
        'DBClusterDescription'         => 'DBClusterDescription',
        'payType'                      => 'PayType',
        'period'                       => 'Period',
        'regionId'                     => 'RegionId',
        'usedTime'                     => 'UsedTime',
        'virtualWareHouseCacheStorage' => 'VirtualWareHouseCacheStorage',
        'virtualWareHouseClass'        => 'VirtualWareHouseClass',
        'virtualWareHouseDescription'  => 'VirtualWareHouseDescription',
        'vpcId'                        => 'VpcId',
        'vswitchId'                    => 'VswitchId',
        'zoneId'                       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->virtualWareHouseCacheStorage) {
            $res['VirtualWareHouseCacheStorage'] = $this->virtualWareHouseCacheStorage;
        }
        if (null !== $this->virtualWareHouseClass) {
            $res['VirtualWareHouseClass'] = $this->virtualWareHouseClass;
        }
        if (null !== $this->virtualWareHouseDescription) {
            $res['VirtualWareHouseDescription'] = $this->virtualWareHouseDescription;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckCreateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VirtualWareHouseCacheStorage'])) {
            $model->virtualWareHouseCacheStorage = $map['VirtualWareHouseCacheStorage'];
        }
        if (isset($map['VirtualWareHouseClass'])) {
            $model->virtualWareHouseClass = $map['VirtualWareHouseClass'];
        }
        if (isset($map['VirtualWareHouseDescription'])) {
            $model->virtualWareHouseDescription = $map['VirtualWareHouseDescription'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
