<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnServiceResponseBody\operationLocks;

class DescribeCdnServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $changingAffectTime;

    /**
     * @var string
     */
    public $changingChargeType;

    /**
     * @var string
     */
    public $changingDynamicBillingType;

    /**
     * @var string
     */
    public $dynamicBillingType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $openingTime;

    /**
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'changingAffectTime' => 'ChangingAffectTime',
        'changingChargeType' => 'ChangingChargeType',
        'changingDynamicBillingType' => 'ChangingDynamicBillingType',
        'dynamicBillingType' => 'DynamicBillingType',
        'instanceId' => 'InstanceId',
        'internetChargeType' => 'InternetChargeType',
        'openingTime' => 'OpeningTime',
        'operationLocks' => 'OperationLocks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->operationLocks) {
            $this->operationLocks->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changingAffectTime) {
            $res['ChangingAffectTime'] = $this->changingAffectTime;
        }

        if (null !== $this->changingChargeType) {
            $res['ChangingChargeType'] = $this->changingChargeType;
        }

        if (null !== $this->changingDynamicBillingType) {
            $res['ChangingDynamicBillingType'] = $this->changingDynamicBillingType;
        }

        if (null !== $this->dynamicBillingType) {
            $res['DynamicBillingType'] = $this->dynamicBillingType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->openingTime) {
            $res['OpeningTime'] = $this->openingTime;
        }

        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toArray($noStream) : $this->operationLocks;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ChangingAffectTime'])) {
            $model->changingAffectTime = $map['ChangingAffectTime'];
        }

        if (isset($map['ChangingChargeType'])) {
            $model->changingChargeType = $map['ChangingChargeType'];
        }

        if (isset($map['ChangingDynamicBillingType'])) {
            $model->changingDynamicBillingType = $map['ChangingDynamicBillingType'];
        }

        if (isset($map['DynamicBillingType'])) {
            $model->dynamicBillingType = $map['DynamicBillingType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['OpeningTime'])) {
            $model->openingTime = $map['OpeningTime'];
        }

        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
