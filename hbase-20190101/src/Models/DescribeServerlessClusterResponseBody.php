<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeServerlessClusterResponseBody extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @example single
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example 2019-10-12T14:40:46
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 150
     *
     * @var string
     */
    public $cuSize;

    /**
     * @example 200
     *
     * @var string
     */
    public $diskSize;

    /**
     * @example 2019-10-12T14:40:46
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example false
     *
     * @var string
     */
    public $haType;

    /**
     * @example false
     *
     * @var string
     */
    public $hasUser;

    /**
     * @example https://sh-wz91452kg946i****-lindorm-serverless-in.lindorm.rds.aliyuncs.com:443
     *
     * @var string
     */
    public $innerEndpoint;

    /**
     * @example hb-bp16f1441y6p2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example true
     *
     * @var string
     */
    public $isDeletionProtection;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @example 2.0.8
     *
     * @var string
     */
    public $mainVersion;

    /**
     * @example https://sh-wz91452kg946i****-lindorm-serverless.lindorm.rds.aliyuncs.com:443
     *
     * @var string
     */
    public $outerEndpoint;

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
     * @example 89F81C30-320B-4550-91DB-C37C81D2358F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var string
     */
    public $reserverMaxQpsNum;

    /**
     * @example 50
     *
     * @var string
     */
    public $reserverMinQpsNum;

    /**
     * @example rg-fjm2d4v7sf****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example ACTIVATION
     *
     * @var string
     */
    public $status;

    /**
     * @example NO
     *
     * @var string
     */
    public $updateStatus;

    /**
     * @example vsw-bp191ipotqf****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp120k6ixs4eoghz****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'            => 'AutoRenew',
        'clusterType'          => 'ClusterType',
        'createTime'           => 'CreateTime',
        'cuSize'               => 'CuSize',
        'diskSize'             => 'DiskSize',
        'expireTime'           => 'ExpireTime',
        'haType'               => 'HaType',
        'hasUser'              => 'HasUser',
        'innerEndpoint'        => 'InnerEndpoint',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'isDeletionProtection' => 'IsDeletionProtection',
        'lockMode'             => 'LockMode',
        'mainVersion'          => 'MainVersion',
        'outerEndpoint'        => 'OuterEndpoint',
        'payType'              => 'PayType',
        'regionId'             => 'RegionId',
        'requestId'            => 'RequestId',
        'reserverMaxQpsNum'    => 'ReserverMaxQpsNum',
        'reserverMinQpsNum'    => 'ReserverMinQpsNum',
        'resourceGroupId'      => 'ResourceGroupId',
        'status'               => 'Status',
        'updateStatus'         => 'UpdateStatus',
        'vSwitchId'            => 'VSwitchId',
        'vpcId'                => 'VpcId',
        'zoneId'               => 'ZoneId',
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
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cuSize) {
            $res['CuSize'] = $this->cuSize;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->haType) {
            $res['HaType'] = $this->haType;
        }
        if (null !== $this->hasUser) {
            $res['HasUser'] = $this->hasUser;
        }
        if (null !== $this->innerEndpoint) {
            $res['InnerEndpoint'] = $this->innerEndpoint;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->isDeletionProtection) {
            $res['IsDeletionProtection'] = $this->isDeletionProtection;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->mainVersion) {
            $res['MainVersion'] = $this->mainVersion;
        }
        if (null !== $this->outerEndpoint) {
            $res['OuterEndpoint'] = $this->outerEndpoint;
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
        if (null !== $this->reserverMaxQpsNum) {
            $res['ReserverMaxQpsNum'] = $this->reserverMaxQpsNum;
        }
        if (null !== $this->reserverMinQpsNum) {
            $res['ReserverMinQpsNum'] = $this->reserverMinQpsNum;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateStatus) {
            $res['UpdateStatus'] = $this->updateStatus;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServerlessClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CuSize'])) {
            $model->cuSize = $map['CuSize'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['HaType'])) {
            $model->haType = $map['HaType'];
        }
        if (isset($map['HasUser'])) {
            $model->hasUser = $map['HasUser'];
        }
        if (isset($map['InnerEndpoint'])) {
            $model->innerEndpoint = $map['InnerEndpoint'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IsDeletionProtection'])) {
            $model->isDeletionProtection = $map['IsDeletionProtection'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['MainVersion'])) {
            $model->mainVersion = $map['MainVersion'];
        }
        if (isset($map['OuterEndpoint'])) {
            $model->outerEndpoint = $map['OuterEndpoint'];
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
        if (isset($map['ReserverMaxQpsNum'])) {
            $model->reserverMaxQpsNum = $map['ReserverMaxQpsNum'];
        }
        if (isset($map['ReserverMinQpsNum'])) {
            $model->reserverMinQpsNum = $map['ReserverMinQpsNum'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateStatus'])) {
            $model->updateStatus = $map['UpdateStatus'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
