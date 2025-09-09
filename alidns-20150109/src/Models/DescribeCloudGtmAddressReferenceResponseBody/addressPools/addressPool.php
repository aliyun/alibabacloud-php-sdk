<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponseBody\addressPools;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressReferenceResponseBody\addressPools\addressPool\instanceConfigs;

class addressPool extends Model
{
    /**
     * @var string
     */
    public $addressLbStrategy;

    /**
     * @var string
     */
    public $addressPoolId;

    /**
     * @var string
     */
    public $addressPoolName;

    /**
     * @var string
     */
    public $addressPoolType;

    /**
     * @var string
     */
    public $availableStatus;

    /**
     * @var string
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $healthJudgement;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var instanceConfigs
     */
    public $instanceConfigs;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $sequenceLbStrategyMode;
    protected $_name = [
        'addressLbStrategy' => 'AddressLbStrategy',
        'addressPoolId' => 'AddressPoolId',
        'addressPoolName' => 'AddressPoolName',
        'addressPoolType' => 'AddressPoolType',
        'availableStatus' => 'AvailableStatus',
        'enableStatus' => 'EnableStatus',
        'healthJudgement' => 'HealthJudgement',
        'healthStatus' => 'HealthStatus',
        'instanceConfigs' => 'InstanceConfigs',
        'remark' => 'Remark',
        'sequenceLbStrategyMode' => 'SequenceLbStrategyMode',
    ];

    public function validate()
    {
        if (null !== $this->instanceConfigs) {
            $this->instanceConfigs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['InstanceConfigs'] = null !== $this->instanceConfigs ? $this->instanceConfigs->toArray($noStream) : $this->instanceConfigs;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->sequenceLbStrategyMode) {
            $res['SequenceLbStrategyMode'] = $this->sequenceLbStrategyMode;
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
