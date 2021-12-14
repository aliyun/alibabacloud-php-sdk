<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponseBody\engineList;
use AlibabaCloud\Tea\Model;

class GetLindormInstanceResponseBody extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $coldStorage;

    /**
     * @var int
     */
    public $createMilliseconds;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $diskThreshold;

    /**
     * @var string
     */
    public $diskUsage;

    /**
     * @var bool
     */
    public $enableCompute;

    /**
     * @var bool
     */
    public $enableKms;

    /**
     * @var engineList[]
     */
    public $engineList;

    /**
     * @var int
     */
    public $engineType;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $expiredMilliseconds;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $instanceStorage;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid'              => 'AliUid',
        'autoRenew'           => 'AutoRenew',
        'coldStorage'         => 'ColdStorage',
        'createMilliseconds'  => 'CreateMilliseconds',
        'createTime'          => 'CreateTime',
        'deletionProtection'  => 'DeletionProtection',
        'diskCategory'        => 'DiskCategory',
        'diskThreshold'       => 'DiskThreshold',
        'diskUsage'           => 'DiskUsage',
        'enableCompute'       => 'EnableCompute',
        'enableKms'           => 'EnableKms',
        'engineList'          => 'EngineList',
        'engineType'          => 'EngineType',
        'expireTime'          => 'ExpireTime',
        'expiredMilliseconds' => 'ExpiredMilliseconds',
        'instanceAlias'       => 'InstanceAlias',
        'instanceId'          => 'InstanceId',
        'instanceStatus'      => 'InstanceStatus',
        'instanceStorage'     => 'InstanceStorage',
        'networkType'         => 'NetworkType',
        'payType'             => 'PayType',
        'regionId'            => 'RegionId',
        'requestId'           => 'RequestId',
        'serviceType'         => 'ServiceType',
        'vpcId'               => 'VpcId',
        'vswitchId'           => 'VswitchId',
        'zoneId'              => 'ZoneId',
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
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->coldStorage) {
            $res['ColdStorage'] = $this->coldStorage;
        }
        if (null !== $this->createMilliseconds) {
            $res['CreateMilliseconds'] = $this->createMilliseconds;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->diskThreshold) {
            $res['DiskThreshold'] = $this->diskThreshold;
        }
        if (null !== $this->diskUsage) {
            $res['DiskUsage'] = $this->diskUsage;
        }
        if (null !== $this->enableCompute) {
            $res['EnableCompute'] = $this->enableCompute;
        }
        if (null !== $this->enableKms) {
            $res['EnableKms'] = $this->enableKms;
        }
        if (null !== $this->engineList) {
            $res['EngineList'] = [];
            if (null !== $this->engineList && \is_array($this->engineList)) {
                $n = 0;
                foreach ($this->engineList as $item) {
                    $res['EngineList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expiredMilliseconds) {
            $res['ExpiredMilliseconds'] = $this->expiredMilliseconds;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->instanceStorage) {
            $res['InstanceStorage'] = $this->instanceStorage;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
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
     * @return GetLindormInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ColdStorage'])) {
            $model->coldStorage = $map['ColdStorage'];
        }
        if (isset($map['CreateMilliseconds'])) {
            $model->createMilliseconds = $map['CreateMilliseconds'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['DiskThreshold'])) {
            $model->diskThreshold = $map['DiskThreshold'];
        }
        if (isset($map['DiskUsage'])) {
            $model->diskUsage = $map['DiskUsage'];
        }
        if (isset($map['EnableCompute'])) {
            $model->enableCompute = $map['EnableCompute'];
        }
        if (isset($map['EnableKms'])) {
            $model->enableKms = $map['EnableKms'];
        }
        if (isset($map['EngineList'])) {
            if (!empty($map['EngineList'])) {
                $model->engineList = [];
                $n                 = 0;
                foreach ($map['EngineList'] as $item) {
                    $model->engineList[$n++] = null !== $item ? engineList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpiredMilliseconds'])) {
            $model->expiredMilliseconds = $map['ExpiredMilliseconds'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['InstanceStorage'])) {
            $model->instanceStorage = $map['InstanceStorage'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
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
