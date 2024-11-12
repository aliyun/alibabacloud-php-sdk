<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601\Models;

use AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceResponseBody\securityIpList;
use AlibabaCloud\Tea\Model;

class DescribeHiTSDBInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description Indicates whether auto-renewal is enabled for the instance that uses the subscription billing method.
     *
     * @example true
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @description The billing method of the instance. Valid values: PREPAY and POSTPAY. The PREPAY value indicates the subscription billing method. The POSTPAY value indicates the pay-as-you-go billing method.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The endpoint of the database.
     *
     * @example ts-xxxxxxxxxxxxxxxxx.hitsdb.tsdb.aliyuncs.com:8242
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The number of CPU cores of the instance.
     *
     * @example 2
     *
     * @var string
     */
    public $cpuNumber;

    /**
     * @description The timestamp when the instance is created.
     *
     * @example 1603426323000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The disk type of the instance. For a TSDB for InfluxDB®️ instance, the valid values are cloud_efficiency and cloud_ssd. The cloud_efficiency value indicates ultra disks. The cloud_ssd value indicates standard SSDs.
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $diskCategory;

    /**
     * @description The engine type of the instance. Valid values: tsdb_tsdb, tsdb_influxdb, and tsdb1.5. The tsdb_tsdb value indicates the OpenTSDB engine. The tsdb_influxdb value indicates the InfluxDB®️ engine. The tsdb1.5 value indicates the tsdb1.5 engine.
     *
     * @example tsdb_tsdb
     *
     * @var string
     */
    public $engineType;

    /**
     * @description The timestamp when the instance expires. This parameter is returned only when the instance uses the subscription billing method.
     *
     * @example 1611417600000
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description The time when the instance is created. The time is in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2020-11-16 16:22:56
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the instance expires. This parameter is returned only when the instance uses the subscription billing method. The time is in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2020-12-17 00:00:00
     *
     * @var string
     */
    public $gmtExpire;

    /**
     * @description The name of the instance.
     *
     * @example tsdb_test
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @description The type of the instance.
     *
     * @example tsdb.96x.large_lindorm
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The description of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The ID of the instance.
     *
     * @example ts-xxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the instance. Valid values: ACTIVATION, CREATING, NET_CREATING, CLASS_CHANGING, LOCKED, and DELETED. ACTIVATION indicates that the instance is running. CREATING indicates that the instance is being created. NET_CREATING indicates that a network connection to the instance is being created. CLASS_CHANGING indicates that the configuration of the instance is being modified. LOCKED indicates that the instance is locked. DELETED indicates that the instance is deleted.
     *
     * @example ACTIVATION
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The storage capacity of the instance. Unit: GB.
     *
     * @example 320
     *
     * @var string
     */
    public $instanceStorage;

    /**
     * @description The transactions per second (TPS) of the instance. Unit: TPS.
     *
     * @example 960000
     *
     * @var string
     */
    public $instanceTps;

    /**
     * @description The number of time series supported by the instance. This parameter is returned only if the instance is a TSDB instance.
     *
     * @example 2400000
     *
     * @var string
     */
    public $maxTimelineLimit;

    /**
     * @description The memory size of the instance. This parameter is returned only if the instance is a TSDB for InfluxDB®️ instance.
     *
     * @example 8
     *
     * @var string
     */
    public $memSize;

    /**
     * @description The network type of the instance.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The billing method of the instance. Valid values: PREPAY and POSTPAY. The PREPAY value indicates the subscription billing method. The POSTPAY value indicates the pay-as-you-go billing method.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The public endpoint of the instance. You can use the public endpoint to access the instance over the Internet.
     *
     * @example ts-xxxxxxxxxxxxxxxxx.influxdata.rds.aliyuncs.com:3242
     *
     * @var string
     */
    public $publicConnectionString;

    /**
     * @description The ID of the region in which the instance is located.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 8D156621-1FCB-414A-BD29-361C3CA4DD56
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The IP address whitelist of the instance.
     *
     * @var securityIpList[]
     */
    public $securityIpList;

    /**
     * @description The edition of the TSDB for InfluxDB®️ instance. Valid values: 0 and 1. The 0 value indicates the Standard Edition. The 1 value indicates the High-availability Edition.
     *
     * @example 1
     *
     * @var int
     */
    public $series;

    /**
     * @description The status of the instance. Valid values: ACTIVATION, CREATING, NET_CREATING, CLASS_CHANGING, LOCKED, and DELETED. ACTIVATION indicates that the instance is running. CREATING indicates that the instance is being created. NET_CREATING indicates that a network connection to the instance is being created. CLASS_CHANGING indicates that the configuration of the instance is being modified. LOCKED indicates that the instance is locked. DELETED indicates that the instance is deleted.
     *
     * @example ACTIVATION
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-xxxxxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch to which the instance connects.
     *
     * @example vsw-xxxxxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The ID of the zone in which the instance is deployed.
     *
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accessDeniedDetail'     => 'AccessDeniedDetail',
        'autoRenew'              => 'AutoRenew',
        'chargeType'             => 'ChargeType',
        'connectionString'       => 'ConnectionString',
        'cpuNumber'              => 'CpuNumber',
        'createTime'             => 'CreateTime',
        'diskCategory'           => 'DiskCategory',
        'engineType'             => 'EngineType',
        'expiredTime'            => 'ExpiredTime',
        'gmtCreated'             => 'GmtCreated',
        'gmtExpire'              => 'GmtExpire',
        'instanceAlias'          => 'InstanceAlias',
        'instanceClass'          => 'InstanceClass',
        'instanceDescription'    => 'InstanceDescription',
        'instanceId'             => 'InstanceId',
        'instanceStatus'         => 'InstanceStatus',
        'instanceStorage'        => 'InstanceStorage',
        'instanceTps'            => 'InstanceTps',
        'maxTimelineLimit'       => 'MaxTimelineLimit',
        'memSize'                => 'MemSize',
        'networkType'            => 'NetworkType',
        'paymentType'            => 'PaymentType',
        'publicConnectionString' => 'PublicConnectionString',
        'regionId'               => 'RegionId',
        'requestId'              => 'RequestId',
        'securityIpList'         => 'SecurityIpList',
        'series'                 => 'Series',
        'status'                 => 'Status',
        'vpcId'                  => 'VpcId',
        'vswitchId'              => 'VswitchId',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->cpuNumber) {
            $res['CpuNumber'] = $this->cpuNumber;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->diskCategory) {
            $res['DiskCategory'] = $this->diskCategory;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtExpire) {
            $res['GmtExpire'] = $this->gmtExpire;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
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
        if (null !== $this->instanceTps) {
            $res['InstanceTps'] = $this->instanceTps;
        }
        if (null !== $this->maxTimelineLimit) {
            $res['MaxTimelineLimit'] = $this->maxTimelineLimit;
        }
        if (null !== $this->memSize) {
            $res['MemSize'] = $this->memSize;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->publicConnectionString) {
            $res['PublicConnectionString'] = $this->publicConnectionString;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->series) {
            $res['Series'] = $this->series;
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
     * @return DescribeHiTSDBInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['CpuNumber'])) {
            $model->cpuNumber = $map['CpuNumber'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DiskCategory'])) {
            $model->diskCategory = $map['DiskCategory'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtExpire'])) {
            $model->gmtExpire = $map['GmtExpire'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
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
        if (isset($map['InstanceTps'])) {
            $model->instanceTps = $map['InstanceTps'];
        }
        if (isset($map['MaxTimelineLimit'])) {
            $model->maxTimelineLimit = $map['MaxTimelineLimit'];
        }
        if (isset($map['MemSize'])) {
            $model->memSize = $map['MemSize'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['PublicConnectionString'])) {
            $model->publicConnectionString = $map['PublicConnectionString'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['Series'])) {
            $model->series = $map['Series'];
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
