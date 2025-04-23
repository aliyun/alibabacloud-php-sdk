<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolReferenceResponseBody\instanceConfigs;

use AlibabaCloud\Dara\Model;

class instanceConfig extends Model
{
    /**
     * @var string
     */
    public $addressPoolLbStrategy;

    /**
     * @var string
     */
    public $availableStatus;

    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $scheduleDomainName;

    /**
     * @var string
     */
    public $scheduleHostname;

    /**
     * @var string
     */
    public $scheduleRrType;

    /**
     * @var string
     */
    public $scheduleZoneName;

    /**
     * @var string
     */
    public $sequenceLbStrategyMode;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'addressPoolLbStrategy' => 'AddressPoolLbStrategy',
        'availableStatus' => 'AvailableStatus',
        'configId' => 'ConfigId',
        'enableStatus' => 'EnableStatus',
        'healthStatus' => 'HealthStatus',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'remark' => 'Remark',
        'scheduleDomainName' => 'ScheduleDomainName',
        'scheduleHostname' => 'ScheduleHostname',
        'scheduleRrType' => 'ScheduleRrType',
        'scheduleZoneName' => 'ScheduleZoneName',
        'sequenceLbStrategyMode' => 'SequenceLbStrategyMode',
        'ttl' => 'Ttl',
        'versionCode' => 'VersionCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
