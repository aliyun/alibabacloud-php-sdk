<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataCenterResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $dataCenterId;

    /**
     * @var string
     */
    public $commodityInstance;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $dataCenterName;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'status'            => 'Status',
        'autoRenewPeriod'   => 'AutoRenewPeriod',
        'dataCenterId'      => 'DataCenterId',
        'commodityInstance' => 'CommodityInstance',
        'createdTime'       => 'CreatedTime',
        'requestId'         => 'RequestId',
        'nodeCount'         => 'NodeCount',
        'zoneId'            => 'ZoneId',
        'clusterId'         => 'ClusterId',
        'payType'           => 'PayType',
        'lockMode'          => 'LockMode',
        'vswitchId'         => 'VswitchId',
        'dataCenterName'    => 'DataCenterName',
        'diskType'          => 'DiskType',
        'vpcId'             => 'VpcId',
        'autoRenewal'       => 'AutoRenewal',
        'diskSize'          => 'DiskSize',
        'regionId'          => 'RegionId',
        'expireTime'        => 'ExpireTime',
        'instanceType'      => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->commodityInstance) {
            $res['CommodityInstance'] = $this->commodityInstance;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->dataCenterName) {
            $res['DataCenterName'] = $this->dataCenterName;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['CommodityInstance'])) {
            $model->commodityInstance = $map['CommodityInstance'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['DataCenterName'])) {
            $model->dataCenterName = $map['DataCenterName'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
