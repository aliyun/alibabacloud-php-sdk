<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponseBody\addressPools;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponseBody\addressPools\addressPool\instanceConfigs;
use AlibabaCloud\Tea\Model;

class addressPool extends Model
{
    /**
     * @description Load balancing policy among addresses in the address pool:
     * - source_nearest: Source-nearest, i.e., intelligent resolution function, where GTM can return different addresses based on the source of different DNS resolution requests, achieving the effect of users accessing nearby.
     * @example round_robin
     *
     * @var string
     */
    public $addressLbStrategy;

    /**
     * @description The ID of the address pool.
     *
     * @example pool-895280232254422016
     *
     * @var string
     */
    public $addressPoolId;

    /**
     * @description Address pool name.
     *
     * @example AddressPool-1
     *
     * @var string
     */
    public $addressPoolName;

    /**
     * @description Address pool type:
     * - domain
     * @example IPv4
     *
     * @var string
     */
    public $addressPoolType;

    /**
     * @description Address pool availability status:
     * - unavailable
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @description Address pool status:
     * - disable: Disabled status
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description The condition for determining the health status of the address pool. Valid values:
     *
     *   any_ok: At least one address in the address pool is available.
     *   p30_ok: At least 30% of the addresses in the address pool are available.
     *   p50_ok: At least 50% of the addresses in the address pool are available.
     *   p70_ok: At least 70% of the addresses in the address pool are available.
     *   all_ok: All addresses in the address pool are available.
     *
     * @example any_ok
     *
     * @var string
     */
    public $healthJudgement;

    /**
     * @description The health state of the address pool. Valid values:
     *
     *   ok: The health state of the address pool is normal and all addresses that are referenced by the address pool are available.
     *   ok_alert: The health state of the address pool is warning and some of the addresses that are referenced by the address pool are unavailable. However, the address pool is deemed normal. In this case, only the available addresses are returned for DNS requests.
     *   exceptional: The health state of the address pool is abnormal and some or all of the addresses that are referenced by the address pool are unavailable. In this case, the address pool is deemed abnormal.
     *
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The instances that reference the address pool.
     *
     * @var instanceConfigs
     */
    public $instanceConfigs;

    /**
     * @description Remarks for the address pool.
     *
     * @example pool-1
     *
     * @var string
     */
    public $remark;

    /**
     * @description Load balancing policy between addresses in sequential mode during the recovery of preceding resources service mode:
     * - non_preemptive: Non-preemption mode, where upon recovery of preceding resources, the current address continues to be used;
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
