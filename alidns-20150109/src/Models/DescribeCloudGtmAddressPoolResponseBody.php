<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolResponseBody\addresses;
use AlibabaCloud\Tea\Model;

class DescribeCloudGtmAddressPoolResponseBody extends Model
{
    /**
     * @description Load balancing policy among addresses in the address pool:
     * - round_robin: Round-robin, where for any source of DNS resolution requests, all addresses are returned, with a rotation of the order for every request.
     * - sequence: Sequential, where for any source of DNS resolution requests, the address with the lower sequence number (indicating a higher priority, the smaller the number, the higher the priority) is returned. If the address with the lower sequence number is unavailable, the next address with a lower sequence number is returned.
     * - weight: Weighted, supporting the setting of different weight values for each address to realize returning addresses according to the weight ratio of query resolutions.
     * - source_nearest: Source-nearest, also known as intelligent resolution, where GTM can return different addresses based on the source of different DNS resolution requests, achieving the effect of users accessing nearby servers.
     *
     * @example round_robin
     *
     * @var string
     */
    public $addressLbStrategy;

    /**
     * @description The ID of the address pool. This ID uniquely identifies the address pool.
     *
     * @example pool-89564674533755**96
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
     * - IPv4
     * - IPv6
     * - domain
     *
     * @example IPv4
     *
     * @var string
     */
    public $addressPoolType;

    /**
     * @description The addresses.
     *
     * @var addresses
     */
    public $addresses;

    /**
     * @description Address pool availability status:
     * - available: Available
     * - unavailable: Unavailable
     *
     * @example available
     *
     * @var string
     */
    public $availableStatus;

    /**
     * @description Address pool creation time.
     *
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Address pool creation time (timestamp).
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description Address pool status:
     * - enable: Enabled status
     * - disable: Disabled status
     *
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
     *   ok_alert: The health state of the address pool is warning and some of the addresses that are referenced by the address pool are unavailable. However, the address pool is deemed normal. In this case, only the available addresses are returned for Domain Name System (DNS) requests.
     *   exceptional: The health state of the address pool is abnormal and some or all of the addresses that are referenced by the address pool are unavailable. In this case, the address pool is deemed abnormal.
     *
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description Remarks for the address.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description Unique request identification code.
     *
     * @example 6856BCF6-11D6-4D7E-AC53-FD579933522B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The mode used if the address with the smallest sequence number is recovered. This parameter is returned only when the policy for load balancing between addresses is sequence. Valid values:
     *
     *   preemptive: The address with the smallest sequence number is preferentially used if this address is recovered.
     *   non_preemptive: The current address is still used even if the address with the smallest sequence number is recovered.
     *
     * @example preemptive
     *
     * @var string
     */
    public $sequenceLbStrategyMode;

    /**
     * @description The last modification time of the address pool.
     *
     * @example 2024-03-15T01:46Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description Last modification time of the address pool (timestamp).
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'addressLbStrategy' => 'AddressLbStrategy',
        'addressPoolId' => 'AddressPoolId',
        'addressPoolName' => 'AddressPoolName',
        'addressPoolType' => 'AddressPoolType',
        'addresses' => 'Addresses',
        'availableStatus' => 'AvailableStatus',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'enableStatus' => 'EnableStatus',
        'healthJudgement' => 'HealthJudgement',
        'healthStatus' => 'HealthStatus',
        'remark' => 'Remark',
        'requestId' => 'RequestId',
        'sequenceLbStrategyMode' => 'SequenceLbStrategyMode',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate() {}

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
        if (null !== $this->addresses) {
            $res['Addresses'] = null !== $this->addresses ? $this->addresses->toMap() : null;
        }
        if (null !== $this->availableStatus) {
            $res['AvailableStatus'] = $this->availableStatus;
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
        if (null !== $this->healthJudgement) {
            $res['HealthJudgement'] = $this->healthJudgement;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sequenceLbStrategyMode) {
            $res['SequenceLbStrategyMode'] = $this->sequenceLbStrategyMode;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudGtmAddressPoolResponseBody
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
        if (isset($map['Addresses'])) {
            $model->addresses = addresses::fromMap($map['Addresses']);
        }
        if (isset($map['AvailableStatus'])) {
            $model->availableStatus = $map['AvailableStatus'];
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
        if (isset($map['HealthJudgement'])) {
            $model->healthJudgement = $map['HealthJudgement'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SequenceLbStrategyMode'])) {
            $model->sequenceLbStrategyMode = $map['SequenceLbStrategyMode'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
