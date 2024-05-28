<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponseBody\addressPools;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponseBody\addressPools\addressPool\instanceConfigs;
use AlibabaCloud\Tea\Model;

class addressPool extends Model
{
    /**
     * @example round_robin
     *
     * @var string
     */
    public $addressLbStrategy;

    /**
     * @example pool-895280232254422016
     *
     * @var string
     */
    public $addressPoolId;

    /**
     * @example AddressPool-1
     *
     * @var string
     */
    public $addressPoolName;

    /**
     * @example IPv4
     *
     * @var string
     */
    public $addressPoolType;

    /**
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @example any_ok
     *
     * @var string
     */
    public $healthJudgement;

    /**
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @var instanceConfigs
     */
    public $instanceConfigs;

    /**
     * @example pool-1
     *
     * @var string
     */
    public $remark;

    /**
     * @example preemptive
     *
     * @var string
     */
    public $sequenceLbStrategyMode;
    protected $_name = [
        'addressLbStrategy'      => 'AddressLbStrategy',
        'addressPoolId'          => 'AddressPoolId',
        'addressPoolName'        => 'AddressPoolName',
        'addressPoolType'        => 'AddressPoolType',
        'availableStatus'        => 'AvailableStatus',
        'enableStatus'           => 'EnableStatus',
        'healthJudgement'        => 'HealthJudgement',
        'healthStatus'           => 'HealthStatus',
        'instanceConfigs'        => 'InstanceConfigs',
        'remark'                 => 'Remark',
        'sequenceLbStrategyMode' => 'SequenceLbStrategyMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressLbStrategy) {
            $res['AddressLbStrategy'] = $this->addressLbStrategy;
        }
        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }
        if (null !== $this->addressPoolName) {
            $res['AddressPoolName'] = $this->addressPoolName;
        }
        if (null !== $this->addressPoolType) {
            $res['AddressPoolType'] = $this->addressPoolType;
        }
        if (null !== $this->availableStatus) {
            $res['AvailableStatus'] = $this->availableStatus;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->healthJudgement) {
            $res['HealthJudgement'] = $this->healthJudgement;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->instanceConfigs) {
            $res['InstanceConfigs'] = null !== $this->instanceConfigs ? $this->instanceConfigs->toMap() : null;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->sequenceLbStrategyMode) {
            $res['SequenceLbStrategyMode'] = $this->sequenceLbStrategyMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addressPool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressLbStrategy'])) {
            $model->addressLbStrategy = $map['AddressLbStrategy'];
        }
        if (isset($map['AddressPoolId'])) {
            $model->addressPoolId = $map['AddressPoolId'];
        }
        if (isset($map['AddressPoolName'])) {
            $model->addressPoolName = $map['AddressPoolName'];
        }
        if (isset($map['AddressPoolType'])) {
            $model->addressPoolType = $map['AddressPoolType'];
        }
        if (isset($map['AvailableStatus'])) {
            $model->availableStatus = $map['AvailableStatus'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['HealthJudgement'])) {
            $model->healthJudgement = $map['HealthJudgement'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['InstanceConfigs'])) {
            $model->instanceConfigs = instanceConfigs::fromMap($map['InstanceConfigs']);
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SequenceLbStrategyMode'])) {
            $model->sequenceLbStrategyMode = $map['SequenceLbStrategyMode'];
        }

        return $model;
    }
}
