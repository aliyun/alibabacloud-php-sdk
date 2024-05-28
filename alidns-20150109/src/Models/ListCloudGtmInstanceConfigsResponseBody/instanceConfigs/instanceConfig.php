<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmInstanceConfigsResponseBody\instanceConfigs;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmInstanceConfigsResponseBody\instanceConfigs\instanceConfig\addressPools;
use AlibabaCloud\Tea\Model;

class instanceConfig extends Model
{
    /**
     * @example round_robin
     *
     * @var string
     */
    public $addressPoolLbStrategy;

    /**
     * @var addressPools
     */
    public $addressPools;

    /**
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @example dns_gtm_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example Config-000**11
     *
     * @var string
     */
    public $configId;

    /**
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @example gtm-cn-wwo3a3hbz**
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @example www.example.com
     *
     * @var string
     */
    public $scheduleDomainName;

    /**
     * @example www
     *
     * @var string
     */
    public $scheduleHostname;

    /**
     * @example A
     *
     * @var string
     */
    public $scheduleRrType;

    /**
     * @example custom
     *
     * @var string
     */
    public $scheduleZoneMode;

    /**
     * @example example.com
     *
     * @var string
     */
    public $scheduleZoneName;

    /**
     * @example preemptive
     *
     * @var string
     */
    public $sequenceLbStrategyMode;

    /**
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @example ultimate
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'addressPoolLbStrategy'  => 'AddressPoolLbStrategy',
        'addressPools'           => 'AddressPools',
        'availableStatus'        => 'AvailableStatus',
        'commodityCode'          => 'CommodityCode',
        'configId'               => 'ConfigId',
        'createTime'             => 'CreateTime',
        'createTimestamp'        => 'CreateTimestamp',
        'enableStatus'           => 'EnableStatus',
        'healthStatus'           => 'HealthStatus',
        'instanceId'             => 'InstanceId',
        'remark'                 => 'Remark',
        'scheduleDomainName'     => 'ScheduleDomainName',
        'scheduleHostname'       => 'ScheduleHostname',
        'scheduleRrType'         => 'ScheduleRrType',
        'scheduleZoneMode'       => 'ScheduleZoneMode',
        'scheduleZoneName'       => 'ScheduleZoneName',
        'sequenceLbStrategyMode' => 'SequenceLbStrategyMode',
        'ttl'                    => 'Ttl',
        'updateTime'             => 'UpdateTime',
        'updateTimestamp'        => 'UpdateTimestamp',
        'versionCode'            => 'VersionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressPoolLbStrategy) {
            $res['AddressPoolLbStrategy'] = $this->addressPoolLbStrategy;
        }
        if (null !== $this->addressPools) {
            $res['AddressPools'] = null !== $this->addressPools ? $this->addressPools->toMap() : null;
        }
        if (null !== $this->availableStatus) {
            $res['AvailableStatus'] = $this->availableStatus;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->scheduleDomainName) {
            $res['ScheduleDomainName'] = $this->scheduleDomainName;
        }
        if (null !== $this->scheduleHostname) {
            $res['ScheduleHostname'] = $this->scheduleHostname;
        }
        if (null !== $this->scheduleRrType) {
            $res['ScheduleRrType'] = $this->scheduleRrType;
        }
        if (null !== $this->scheduleZoneMode) {
            $res['ScheduleZoneMode'] = $this->scheduleZoneMode;
        }
        if (null !== $this->scheduleZoneName) {
            $res['ScheduleZoneName'] = $this->scheduleZoneName;
        }
        if (null !== $this->sequenceLbStrategyMode) {
            $res['SequenceLbStrategyMode'] = $this->sequenceLbStrategyMode;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressPoolLbStrategy'])) {
            $model->addressPoolLbStrategy = $map['AddressPoolLbStrategy'];
        }
        if (isset($map['AddressPools'])) {
            $model->addressPools = addressPools::fromMap($map['AddressPools']);
        }
        if (isset($map['AvailableStatus'])) {
            $model->availableStatus = $map['AvailableStatus'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ScheduleDomainName'])) {
            $model->scheduleDomainName = $map['ScheduleDomainName'];
        }
        if (isset($map['ScheduleHostname'])) {
            $model->scheduleHostname = $map['ScheduleHostname'];
        }
        if (isset($map['ScheduleRrType'])) {
            $model->scheduleRrType = $map['ScheduleRrType'];
        }
        if (isset($map['ScheduleZoneMode'])) {
            $model->scheduleZoneMode = $map['ScheduleZoneMode'];
        }
        if (isset($map['ScheduleZoneName'])) {
            $model->scheduleZoneName = $map['ScheduleZoneName'];
        }
        if (isset($map['SequenceLbStrategyMode'])) {
            $model->sequenceLbStrategyMode = $map['SequenceLbStrategyMode'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
