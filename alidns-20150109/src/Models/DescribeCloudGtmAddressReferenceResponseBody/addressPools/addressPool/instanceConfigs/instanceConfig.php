<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponseBody\addressPools\addressPool\instanceConfigs;

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
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @example config-00**01
     *
     * @var string
     */
    public $configId;

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
     * @example gtm-cn-zz11t58**0k
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
     * @example 30
     *
     * @var int
     */
    public $ttl;

    /**
     * @example ultimate
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'addressPoolLbStrategy'  => 'AddressPoolLbStrategy',
        'availableStatus'        => 'AvailableStatus',
        'configId'               => 'ConfigId',
        'enableStatus'           => 'EnableStatus',
        'healthStatus'           => 'HealthStatus',
        'instanceId'             => 'InstanceId',
        'instanceName'           => 'InstanceName',
        'remark'                 => 'Remark',
        'scheduleDomainName'     => 'ScheduleDomainName',
        'scheduleHostname'       => 'ScheduleHostname',
        'scheduleRrType'         => 'ScheduleRrType',
        'scheduleZoneName'       => 'ScheduleZoneName',
        'sequenceLbStrategyMode' => 'SequenceLbStrategyMode',
        'ttl'                    => 'Ttl',
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
        if (null !== $this->availableStatus) {
            $res['AvailableStatus'] = $this->availableStatus;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
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
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (null !== $this->scheduleZoneName) {
            $res['ScheduleZoneName'] = $this->scheduleZoneName;
        }
        if (null !== $this->sequenceLbStrategyMode) {
            $res['SequenceLbStrategyMode'] = $this->sequenceLbStrategyMode;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
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
        if (isset($map['AvailableStatus'])) {
            $model->availableStatus = $map['AvailableStatus'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
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
        if (isset($map['ScheduleZoneName'])) {
            $model->scheduleZoneName = $map['ScheduleZoneName'];
        }
        if (isset($map['SequenceLbStrategyMode'])) {
            $model->sequenceLbStrategyMode = $map['SequenceLbStrategyMode'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
