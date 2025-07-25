<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigFullInfoResponseBody\addressPools;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigFullInfoResponseBody\addressPools\addressPool\addresses;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigFullInfoResponseBody\addressPools\addressPool\requestSource;
use AlibabaCloud\Tea\Model;

class addressPool extends Model
{
    /**
     * @description Load balancing policy among addresses in the address pool:
     * - round_robin: Round-robin, for any source of DNS resolution requests, returns all addresses and rotates their order for each request.
     * - sequence: Sequential, for any source of DNS resolution requests, returns the address with the smaller sequence number (the sequence number indicates the priority of the address return, with smaller numbers having higher priority). If the address with the smaller sequence number is unavailable, the next address with a smaller sequence number is returned.
     * - weight: Weighted, supports setting different weight values for each address to realize returning addresses according to the weight ratio for resolution queries.
     * - source_nearest: Source-nearest, i.e., intelligent resolution function, where GTM can return different addresses based on the source of different DNS resolution requests, achieving the effect of users accessing nearby.
     *
     * @example round_robin
     *
     * @var string
     */
    public $addressLbStrategy;

    /**
     * @description The ID of the address pool. This ID uniquely identifies the address pool.
     *
     * @example pool-89528023225442**16
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
     * @description The availability state of the address pool. Valid values:
     *
     *   Available
     *   unavailable
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
     * @description The enabling state of the address pool. Valid values:
     *
     *   enable
     *   disable
     *
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description The condition for determining the health state of the address pool. Valid values:
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
     * @description Address pool health status:
     * - ok: Normal, all addresses referenced by the address pool are available.
     * - ok_alert: Warning, some addresses referenced by the address pool are unavailable, but the address pool status is deemed normal. In the warning state, available address pools are resolved normally, while unavailable ones stop resolving.
     * - exceptional: Abnormal, some or all of the addresses referenced by the address pool are unavailable, and the address pool status is determined to be abnormal.
     *
     * @example ok
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description Parse the list of request sources.
     *
     * @var requestSource
     */
    public $requestSource;

    /**
     * @description Indicates whether it is a sequential (non-preemptive) scheduling object for hybrid cloud management scenarios:
     * - true: yes
     * - false: no
     *
     * @example false
     *
     * @var bool
     */
    public $seqNonPreemptiveSchedule;

    /**
     * @description The mode used if the address with the smallest sequence number is recovered. This parameter is required only when AddressLbStrategy is set to sequence. Valid values:
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
     * @description Sequence number. For any parsing request from any source, the address pool with the smaller sequence number is returned (the sequence number indicates the priority of the address pool returned, with smaller numbers having higher priority).
     *
     * @example 1
     *
     * @var int
     */
    public $serialNumber;

    /**
     * @description Last modification time of the address pool.
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

    /**
     * @description Weight value (an integer between 1 and 100, inclusive), allowing different weight values to be set for each address pool, enabling resolution queries to return address pools according to the weighted ratio.
     *
     * @example 1
     *
     * @var int
     */
    public $weightValue;
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
        'requestSource' => 'RequestSource',
        'seqNonPreemptiveSchedule' => 'SeqNonPreemptiveSchedule',
        'sequenceLbStrategyMode' => 'SequenceLbStrategyMode',
        'serialNumber' => 'SerialNumber',
        'updateTime' => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'weightValue' => 'WeightValue',
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
        if (null !== $this->requestSource) {
            $res['RequestSource'] = null !== $this->requestSource ? $this->requestSource->toMap() : null;
        }
        if (null !== $this->seqNonPreemptiveSchedule) {
            $res['SeqNonPreemptiveSchedule'] = $this->seqNonPreemptiveSchedule;
        }
        if (null !== $this->sequenceLbStrategyMode) {
            $res['SequenceLbStrategyMode'] = $this->sequenceLbStrategyMode;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->weightValue) {
            $res['WeightValue'] = $this->weightValue;
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
        if (isset($map['RequestSource'])) {
            $model->requestSource = requestSource::fromMap($map['RequestSource']);
        }
        if (isset($map['SeqNonPreemptiveSchedule'])) {
            $model->seqNonPreemptiveSchedule = $map['SeqNonPreemptiveSchedule'];
        }
        if (isset($map['SequenceLbStrategyMode'])) {
            $model->sequenceLbStrategyMode = $map['SequenceLbStrategyMode'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['WeightValue'])) {
            $model->weightValue = $map['WeightValue'];
        }

        return $model;
    }
}
