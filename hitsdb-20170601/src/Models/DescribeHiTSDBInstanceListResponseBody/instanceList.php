<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20170601\Models\DescribeHiTSDBInstanceListResponseBody;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $maxSeriesPerDatabase;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $chargeType;

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
    public $instanceId;

    /**
     * @var string
     */
    public $lockMode;

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
    public $gmtCreated;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var string
     */
    public $instanceTps;

    /**
     * @var int
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $gmtExpire;
    protected $_name = [
        'vpcId'                => 'VpcId',
        'status'               => 'Status',
        'maxSeriesPerDatabase' => 'MaxSeriesPerDatabase',
        'paymentType'          => 'PaymentType',
        'engineType'           => 'EngineType',
        'vswitchId'            => 'VswitchId',
        'instanceClass'        => 'InstanceClass',
        'createTime'           => 'CreateTime',
        'userId'               => 'UserId',
        'chargeType'           => 'ChargeType',
        'instanceStorage'      => 'InstanceStorage',
        'networkType'          => 'NetworkType',
        'instanceId'           => 'InstanceId',
        'lockMode'             => 'LockMode',
        'instanceDescription'  => 'InstanceDescription',
        'regionId'             => 'RegionId',
        'gmtCreated'           => 'GmtCreated',
        'instanceAlias'        => 'InstanceAlias',
        'instanceTps'          => 'InstanceTps',
        'expiredTime'          => 'ExpiredTime',
        'zoneId'               => 'ZoneId',
        'instanceStatus'       => 'InstanceStatus',
        'gmtExpire'            => 'GmtExpire',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->maxSeriesPerDatabase) {
            $res['MaxSeriesPerDatabase'] = $this->maxSeriesPerDatabase;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->instanceStorage) {
            $res['InstanceStorage'] = $this->instanceStorage;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->instanceTps) {
            $res['InstanceTps'] = $this->instanceTps;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->gmtExpire) {
            $res['GmtExpire'] = $this->gmtExpire;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['MaxSeriesPerDatabase'])) {
            $model->maxSeriesPerDatabase = $map['MaxSeriesPerDatabase'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['InstanceStorage'])) {
            $model->instanceStorage = $map['InstanceStorage'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['InstanceTps'])) {
            $model->instanceTps = $map['InstanceTps'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['GmtExpire'])) {
            $model->gmtExpire = $map['GmtExpire'];
        }

        return $model;
    }
}
