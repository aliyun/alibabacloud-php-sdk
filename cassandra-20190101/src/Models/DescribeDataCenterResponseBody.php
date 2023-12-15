<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataCenterResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @example cds-t4n98w89z77*****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example cds-t4n98w89z77*****
     *
     * @var string
     */
    public $commodityInstance;

    /**
     * @example 2020-10-16T11:27:20Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example ap-southeast-1a
     *
     * @var string
     */
    public $dataCenterId;

    /**
     * @example test_name
     *
     * @var string
     */
    public $dataCenterName;

    /**
     * @example 160
     *
     * @var int
     */
    public $diskSize;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskType;

    /**
     * @example 2020-11-17T00:00:00Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example cassandra.c.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example None
     *
     * @var string
     */
    public $lockMode;

    /**
     * @example 2
     *
     * @var int
     */
    public $nodeCount;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $payType;

    /**
     * @example ap-southeast-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @example A4C83BDF-1DE0-41CD-9D6C-8D9FE5EB5504
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example vpc-bp1qitxqe1m5r****4mng
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-bp13e9ynz3jpy****hqlm
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @example ap-southeast-1a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenewPeriod'   => 'AutoRenewPeriod',
        'autoRenewal'       => 'AutoRenewal',
        'clusterId'         => 'ClusterId',
        'commodityInstance' => 'CommodityInstance',
        'createdTime'       => 'CreatedTime',
        'dataCenterId'      => 'DataCenterId',
        'dataCenterName'    => 'DataCenterName',
        'diskSize'          => 'DiskSize',
        'diskType'          => 'DiskType',
        'expireTime'        => 'ExpireTime',
        'instanceType'      => 'InstanceType',
        'lockMode'          => 'LockMode',
        'nodeCount'         => 'NodeCount',
        'payType'           => 'PayType',
        'regionId'          => 'RegionId',
        'requestId'         => 'RequestId',
        'status'            => 'Status',
        'vpcId'             => 'VpcId',
        'vswitchId'         => 'VswitchId',
        'zoneId'            => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->commodityInstance) {
            $res['CommodityInstance'] = $this->commodityInstance;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->dataCenterName) {
            $res['DataCenterName'] = $this->dataCenterName;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return DescribeDataCenterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CommodityInstance'])) {
            $model->commodityInstance = $map['CommodityInstance'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['DataCenterName'])) {
            $model->dataCenterName = $map['DataCenterName'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
