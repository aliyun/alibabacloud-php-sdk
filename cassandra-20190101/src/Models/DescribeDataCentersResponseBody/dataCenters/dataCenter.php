<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeDataCentersResponseBody\dataCenters;

use AlibabaCloud\Tea\Model;

class dataCenter extends Model
{
    /**
     * @var string
     */
    public $status;

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
    public $expireTime;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $commodityInstance;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $dataCenterName;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dataCenterId;
    protected $_name = [
        'status'            => 'Status',
        'vpcId'             => 'VpcId',
        'vswitchId'         => 'VswitchId',
        'expireTime'        => 'ExpireTime',
        'diskSize'          => 'DiskSize',
        'payType'           => 'PayType',
        'diskType'          => 'DiskType',
        'instanceType'      => 'InstanceType',
        'lockMode'          => 'LockMode',
        'autoRenewPeriod'   => 'AutoRenewPeriod',
        'regionId'          => 'RegionId',
        'autoRenewal'       => 'AutoRenewal',
        'commodityInstance' => 'CommodityInstance',
        'nodeCount'         => 'NodeCount',
        'dataCenterName'    => 'DataCenterName',
        'zoneId'            => 'ZoneId',
        'createdTime'       => 'CreatedTime',
        'clusterId'         => 'ClusterId',
        'dataCenterId'      => 'DataCenterId',
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
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->commodityInstance) {
            $res['CommodityInstance'] = $this->commodityInstance;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->dataCenterName) {
            $res['DataCenterName'] = $this->dataCenterName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataCenter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['CommodityInstance'])) {
            $model->commodityInstance = $map['CommodityInstance'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['DataCenterName'])) {
            $model->dataCenterName = $map['DataCenterName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }

        return $model;
    }
}
