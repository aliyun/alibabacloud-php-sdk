<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceListResponseBody;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @description The user ID.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The billing method of the instance. Valid values: PREPAY and POSTPAY. The PREPAY value indicates the subscription billing method. The POSTPAY value indicates the pay-as-you-go billing method.
     *
     * @example 1603426323000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the vSwitch.
     *
     * @example tsdb_tsdb
     *
     * @var string
     */
    public $engineType;

    /**
     * @description The ID of the zone in which the instance is deployed.
     *
     * @example 1611417600000
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description The name of the instance.
     *
     * @example 2020-11-16 16:22:56
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description Queries the list of Time Series Database (TSDB) instances.
     *
     * @example 2020-12-17 00:00:00
     *
     * @var string
     */
    public $gmtExpire;

    /**
     * @description The transactions per second (TPS) of the instance. Unit: TPS.
     *
     * @example test_tsdb
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @description The timestamp when the instance was created.
     *
     * @example tsdb.1x.basic
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The region ID of the instance.
     *
     * @example test
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description Indicates whether the instance is locked. Valid values: 0 and 1. The value 0 indicates that the instance is not locked. The value 1 indicates that the instance is locked.
     *
     * @example ts-xxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the instance expires. This parameter is returned only when the instance uses the subscription billing method. The time is in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example ACTIVATION
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description The network type of the instance. The VPC value indicates a virtual private cloud (VPC).
     *
     * @example 50
     *
     * @var string
     */
    public $instanceStorage;

    /**
     * @description The timestamp when the instance expires. This parameter is returned only when the instance uses the subscription billing method.
     *
     * @example 960000
     *
     * @var string
     */
    public $instanceTps;

    /**
     * @description The description of the instance.
     *
     * @example 0
     *
     * @var string
     */
    public $lockMode;

    /**
     * @description The engine type of the instance. Valid values: tsdb_tsdb and tsdb_influxdb. The tsdb_tsdb value indicates the OpenTSDB engine. The tsdb_influxdb value indicates the InfluxDB®️ engine.
     *
     * @example 10000
     *
     * @var string
     */
    public $maxSeriesPerDatabase;

    /**
     * @description The ID of the instance.
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The maximum number of time series that can be stored in a database.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The time when the instance was created. The time is in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the VPC.
     *
     * @example ACTIVATION
     *
     * @var string
     */
    public $status;

    /**
     * @description The storage capacity of the instance. Unit: GB.
     *
     * @example 1000000000000000
     *
     * @var string
     */
    public $userId;

    /**
     * @description The billing method of the instance. Valid values: PREPAY and POSTPAY. The PREPAY value indicates the subscription billing method. The POSTPAY value indicates the pay-as-you-go billing method.
     *
     * @example vpc-bp1xxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The type of the instance.
     *
     * @example vsw-bp1xxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The state of the instance. The value of this parameter is an enumerated string.
     *
     * @example cn-hongkong-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'chargeType'           => 'ChargeType',
        'createTime'           => 'CreateTime',
        'engineType'           => 'EngineType',
        'expiredTime'          => 'ExpiredTime',
        'gmtCreated'           => 'GmtCreated',
        'gmtExpire'            => 'GmtExpire',
        'instanceAlias'        => 'InstanceAlias',
        'instanceClass'        => 'InstanceClass',
        'instanceDescription'  => 'InstanceDescription',
        'instanceId'           => 'InstanceId',
        'instanceStatus'       => 'InstanceStatus',
        'instanceStorage'      => 'InstanceStorage',
        'instanceTps'          => 'InstanceTps',
        'lockMode'             => 'LockMode',
        'maxSeriesPerDatabase' => 'MaxSeriesPerDatabase',
        'networkType'          => 'NetworkType',
        'paymentType'          => 'PaymentType',
        'regionId'             => 'RegionId',
        'status'               => 'Status',
        'userId'               => 'UserId',
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
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->maxSeriesPerDatabase) {
            $res['MaxSeriesPerDatabase'] = $this->maxSeriesPerDatabase;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['MaxSeriesPerDatabase'])) {
            $model->maxSeriesPerDatabase = $map['MaxSeriesPerDatabase'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
