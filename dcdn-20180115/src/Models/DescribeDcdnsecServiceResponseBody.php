<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnsecServiceResponseBody\operationLocks;

class DescribeDcdnsecServiceResponseBody extends Model
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
    public $domainNum;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $flowType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requestType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'changingAffectTime' => 'ChangingAffectTime',
        'changingChargeType' => 'ChangingChargeType',
        'domainNum' => 'DomainNum',
        'endTime' => 'EndTime',
        'flowType' => 'FlowType',
        'instanceId' => 'InstanceId',
        'internetChargeType' => 'InternetChargeType',
        'operationLocks' => 'OperationLocks',
        'requestId' => 'RequestId',
        'requestType' => 'RequestType',
        'startTime' => 'StartTime',
        'version' => 'Version',
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

        if (null !== $this->domainNum) {
            $res['DomainNum'] = $this->domainNum;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toArray($noStream) : $this->operationLocks;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->requestType) {
            $res['RequestType'] = $this->requestType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        if (isset($map['DomainNum'])) {
            $model->domainNum = $map['DomainNum'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RequestType'])) {
            $model->requestType = $map['RequestType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
