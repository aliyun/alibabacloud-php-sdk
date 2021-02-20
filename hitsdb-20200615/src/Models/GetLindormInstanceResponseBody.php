<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceResponseBody\engineList;
use AlibabaCloud\Tea\Model;

class GetLindormInstanceResponseBody extends Model
{
    /**
     * @var engineList[]
     */
    public $engineList;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $diskUsage;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var int
     */
    public $engineType;

    /**
     * @var string
     */
    public $instanceStorage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $coldStorage;

    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $aliUid;
    protected $_name = [
        'engineList'         => 'EngineList',
        'autoRenew'          => 'AutoRenew',
        'diskUsage'          => 'DiskUsage',
        'networkType'        => 'NetworkType',
        'serviceType'        => 'ServiceType',
        'instanceAlias'      => 'InstanceAlias',
        'instanceStatus'     => 'InstanceStatus',
        'engineType'         => 'EngineType',
        'instanceStorage'    => 'InstanceStorage',
        'requestId'          => 'RequestId',
        'zoneId'             => 'ZoneId',
        'instanceId'         => 'InstanceId',
        'createTime'         => 'CreateTime',
        'coldStorage'        => 'ColdStorage',
        'diskCategory'       => 'DiskCategory',
        'payType'            => 'PayType',
        'deletionProtection' => 'DeletionProtection',
        'vswitchId'          => 'VswitchId',
        'vpcId'              => 'VpcId',
        'regionId'           => 'RegionId',
        'expireTime'         => 'ExpireTime',
        'aliUid'             => 'AliUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineList) {
            $res['EngineList'] = [];
            if (null !== $this->engineList && \is_array($this->engineList)) {
                $n = 0;
                foreach ($this->engineList as $item) {
                    $res['EngineList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->diskUsage) {
            $res['DiskUsage'] = $this->diskUsage;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->instanceStorage) {
            $res['InstanceStorage'] = $this->instanceStorage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->coldStorage) {
            $res['ColdStorage'] = $this->coldStorage;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
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
        if (isset($map['EngineList'])) {
            if (!empty($map['EngineList'])) {
                $model->engineList = [];
                $n                 = 0;
                foreach ($map['EngineList'] as $item) {
                    $model->engineList[$n++] = null !== $item ? engineList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['DiskUsage'])) {
            $model->diskUsage = $map['DiskUsage'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['InstanceStorage'])) {
            $model->instanceStorage = $map['InstanceStorage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ColdStorage'])) {
            $model->coldStorage = $map['ColdStorage'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        return $model;
    }
}
