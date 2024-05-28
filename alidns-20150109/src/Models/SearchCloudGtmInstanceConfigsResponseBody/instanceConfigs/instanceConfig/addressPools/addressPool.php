<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmInstanceConfigsResponseBody\instanceConfigs\instanceConfig\addressPools;

use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmInstanceConfigsResponseBody\instanceConfigs\instanceConfig\addressPools\addressPool\requestSource;
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
     * @example pool-89564504435014**60
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
     * @var requestSource
     */
    public $requestSource;

    /**
     * @example false
     *
     * @var bool
     */
    public $seqNonPreemptiveSchedule;

    /**
     * @example preemptive
     *
     * @var string
     */
    public $sequenceLbStrategyMode;

    /**
     * @example 1
     *
     * @var int
     */
    public $serialNumber;

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
     * @example 1
     *
     * @var int
     */
    public $weightValue;
    protected $_name = [
        'addressLbStrategy'        => 'AddressLbStrategy',
        'addressPoolId'            => 'AddressPoolId',
        'addressPoolName'          => 'AddressPoolName',
        'addressPoolType'          => 'AddressPoolType',
        'availableStatus'          => 'AvailableStatus',
        'createTime'               => 'CreateTime',
        'createTimestamp'          => 'CreateTimestamp',
        'enableStatus'             => 'EnableStatus',
        'healthJudgement'          => 'HealthJudgement',
        'healthStatus'             => 'HealthStatus',
        'requestSource'            => 'RequestSource',
        'seqNonPreemptiveSchedule' => 'SeqNonPreemptiveSchedule',
        'sequenceLbStrategyMode'   => 'SequenceLbStrategyMode',
        'serialNumber'             => 'SerialNumber',
        'updateTime'               => 'UpdateTime',
        'updateTimestamp'          => 'UpdateTimestamp',
        'weightValue'              => 'WeightValue',
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
