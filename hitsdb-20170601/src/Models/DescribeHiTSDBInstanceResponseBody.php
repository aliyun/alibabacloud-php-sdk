<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601\Models;

use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceResponseBody\securityIpList;
use AlibabaCloud\Tea\Model;

class DescribeHiTSDBInstanceResponseBody extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $cpuNumber;

    /**
     * @var string
     */
    public $memSize;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $gmtExpire;

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
    public $expiredTime;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $maxTimelineLimit;

    /**
     * @var string
     */
    public $publicConnectionString;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $instanceTps;

    /**
     * @var string
     */
    public $status;

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
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $diskCategory;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var int
     */
    public $series;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var securityIpList[]
     */
    public $securityIpList;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $connectionString;
    protected $_name = [
        'autoRenew'              => 'AutoRenew',
        'gmtCreated'             => 'GmtCreated',
        'cpuNumber'              => 'CpuNumber',
        'memSize'                => 'MemSize',
        'networkType'            => 'NetworkType',
        'gmtExpire'              => 'GmtExpire',
        'instanceAlias'          => 'InstanceAlias',
        'instanceStatus'         => 'InstanceStatus',
        'expiredTime'            => 'ExpiredTime',
        'paymentType'            => 'PaymentType',
        'maxTimelineLimit'       => 'MaxTimelineLimit',
        'publicConnectionString' => 'PublicConnectionString',
        'engineType'             => 'EngineType',
        'instanceTps'            => 'InstanceTps',
        'status'                 => 'Status',
        'instanceStorage'        => 'InstanceStorage',
        'requestId'              => 'RequestId',
        'zoneId'                 => 'ZoneId',
        'instanceId'             => 'InstanceId',
        'createTime'             => 'CreateTime',
        'diskCategory'           => 'DiskCategory',
        'instanceClass'          => 'InstanceClass',
        'vswitchId'              => 'VswitchId',
        'series'                 => 'Series',
        'vpcId'                  => 'VpcId',
        'chargeType'             => 'ChargeType',
        'securityIpList'         => 'SecurityIpList',
        'instanceDescription'    => 'InstanceDescription',
        'regionId'               => 'RegionId',
        'connectionString'       => 'ConnectionString',
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
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->cpuNumber) {
            $res['CpuNumber'] = $this->cpuNumber;
        }
        if (null !== $this->memSize) {
            $res['MemSize'] = $this->memSize;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->gmtExpire) {
            $res['GmtExpire'] = $this->gmtExpire;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->maxTimelineLimit) {
            $res['MaxTimelineLimit'] = $this->maxTimelineLimit;
        }
        if (null !== $this->publicConnectionString) {
            $res['PublicConnectionString'] = $this->publicConnectionString;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->instanceTps) {
            $res['InstanceTps'] = $this->instanceTps;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->series) {
            $res['Series'] = $this->series;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->securityIpList) {
            $res['SecurityIpList'] = [];
            if (null !== $this->securityIpList && \is_array($this->securityIpList)) {
                $n = 0;
                foreach ($this->securityIpList as $item) {
                    $res['SecurityIpList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHiTSDBInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['CpuNumber'])) {
            $model->cpuNumber = $map['CpuNumber'];
        }
        if (isset($map['MemSize'])) {
            $model->memSize = $map['MemSize'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['GmtExpire'])) {
            $model->gmtExpire = $map['GmtExpire'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['MaxTimelineLimit'])) {
            $model->maxTimelineLimit = $map['MaxTimelineLimit'];
        }
        if (isset($map['PublicConnectionString'])) {
            $model->publicConnectionString = $map['PublicConnectionString'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['InstanceTps'])) {
            $model->instanceTps = $map['InstanceTps'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['SecurityIpList'])) {
            if (!empty($map['SecurityIpList'])) {
                $model->securityIpList = [];
                $n                     = 0;
                foreach ($map['SecurityIpList'] as $item) {
                    $model->securityIpList[$n++] = null !== $item ? securityIpList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        return $model;
    }
}
