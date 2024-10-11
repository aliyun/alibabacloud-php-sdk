<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeClusterResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeClusterResponseBody\data\virtualWareHouses;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 140692647406****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example 200
     *
     * @var int
     */
    public $cacheStorageSizeGiB;

    /**
     * @example CloudESSD
     *
     * @var string
     */
    public $cacheStorageType;

    /**
     * @example clickhouse_go_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 2022-03-18T08:14:48Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @example cc-uf6a499c0m3w5****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example Running
     *
     * @var string
     */
    public $DBClusterStatus;

    /**
     * @example 21.8
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @example 2022-04-17T08:14:48Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example Unlock
     *
     * @var string
     */
    public $lockMode;

    /**
     * @example DISK_FULL
     *
     * @var string
     */
    public $lockReason;

    /**
     * @example 0
     *
     * @var int
     */
    public $objectStoreSizeGiB;

    /**
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 8
     *
     * @var int
     */
    public $resourceCpuCores;

    /**
     * @example 32
     *
     * @var int
     */
    public $resourceMemoryGiB;

    /**
     * @var virtualWareHouses[]
     */
    public $virtualWareHouses;

    /**
     * @description VPC ID。
     *
     * @example vpc-wz9duj8xd6r1gzhsg*****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-2vcmrf8c878scsv43****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid'               => 'AliUid',
        'cacheStorageSizeGiB'  => 'CacheStorageSizeGiB',
        'cacheStorageType'     => 'CacheStorageType',
        'commodityCode'        => 'CommodityCode',
        'createTime'           => 'CreateTime',
        'DBClusterDescription' => 'DBClusterDescription',
        'DBClusterId'          => 'DBClusterId',
        'DBClusterStatus'      => 'DBClusterStatus',
        'engineVersion'        => 'EngineVersion',
        'expireTime'           => 'ExpireTime',
        'lockMode'             => 'LockMode',
        'lockReason'           => 'LockReason',
        'objectStoreSizeGiB'   => 'ObjectStoreSizeGiB',
        'payType'              => 'PayType',
        'regionId'             => 'RegionId',
        'resourceCpuCores'     => 'ResourceCpuCores',
        'resourceMemoryGiB'    => 'ResourceMemoryGiB',
        'virtualWareHouses'    => 'VirtualWareHouses',
        'vpcId'                => 'VpcId',
        'vswitchId'            => 'VswitchId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->cacheStorageSizeGiB) {
            $res['CacheStorageSizeGiB'] = $this->cacheStorageSizeGiB;
        }
        if (null !== $this->cacheStorageType) {
            $res['CacheStorageType'] = $this->cacheStorageType;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBClusterStatus) {
            $res['DBClusterStatus'] = $this->DBClusterStatus;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->objectStoreSizeGiB) {
            $res['ObjectStoreSizeGiB'] = $this->objectStoreSizeGiB;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceCpuCores) {
            $res['ResourceCpuCores'] = $this->resourceCpuCores;
        }
        if (null !== $this->resourceMemoryGiB) {
            $res['ResourceMemoryGiB'] = $this->resourceMemoryGiB;
        }
        if (null !== $this->virtualWareHouses) {
            $res['VirtualWareHouses'] = [];
            if (null !== $this->virtualWareHouses && \is_array($this->virtualWareHouses)) {
                $n = 0;
                foreach ($this->virtualWareHouses as $item) {
                    $res['VirtualWareHouses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CacheStorageSizeGiB'])) {
            $model->cacheStorageSizeGiB = $map['CacheStorageSizeGiB'];
        }
        if (isset($map['CacheStorageType'])) {
            $model->cacheStorageType = $map['CacheStorageType'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBClusterStatus'])) {
            $model->DBClusterStatus = $map['DBClusterStatus'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['ObjectStoreSizeGiB'])) {
            $model->objectStoreSizeGiB = $map['ObjectStoreSizeGiB'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceCpuCores'])) {
            $model->resourceCpuCores = $map['ResourceCpuCores'];
        }
        if (isset($map['ResourceMemoryGiB'])) {
            $model->resourceMemoryGiB = $map['ResourceMemoryGiB'];
        }
        if (isset($map['VirtualWareHouses'])) {
            if (!empty($map['VirtualWareHouses'])) {
                $model->virtualWareHouses = [];
                $n                        = 0;
                foreach ($map['VirtualWareHouses'] as $item) {
                    $model->virtualWareHouses[$n++] = null !== $item ? virtualWareHouses::fromMap($item) : $item;
                }
            }
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
