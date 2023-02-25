<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnsecServiceResponseBody\operationLocks;
use AlibabaCloud\Tea\Model;

class DescribeDcdnsecServiceResponseBody extends Model
{
    /**
     * @description The time when the renewed secure DCDN takes effect. The time is displayed in UTC.
     *
     * @example 2021-09-30T16:00:00Z
     *
     * @var string
     */
    public $changingAffectTime;

    /**
     * @description The new metering method for the renewed secure DCDN. Valid values:
     *
     *   **PayByTraffic**: pay-by-data-transfer
     *   **PayByBandwidth**: pay-by-bandwidth
     *   **PayByBandwidth95**: pay-by-95th percentile bandwidth
     *   **PayByBandwidth_monthavg**: pay-by-monthly average bandwidth
     *   **PayByBandwidth_month4th**: pay-by-fourth peak bandwidth per month
     *   **PayByBandwidth_monthday95avg**: pay-by-monthly average 95th percentile bandwidth
     *   **PayByBandwidth_nighthalf95**: pay-by-95th percentile bandwidth (50% off during nighttime)
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $changingChargeType;

    /**
     * @description The number of accelerated domain names that use secure DCDN.
     *
     * @example 130
     *
     * @var string
     */
    public $domainNum;

    /**
     * @description The time when secure DCDN expires.
     *
     * @example 2021-09-26T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The metering method for traffic.
     *
     * @example PayBySecTraffic
     *
     * @var string
     */
    public $flowType;

    /**
     * @description The ID of the instance.
     *
     * @example dcdn_dcdnsec_public_cn-123***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The current metering method. Valid values:
     *
     *   **PayByTraffic**: pay-by-data-transfer
     *   **PayByBandwidth**: pay-by-bandwidth
     *   **PayByBandwidth95**: pay-by-95th percentile bandwidth
     *   **PayByBandwidth_monthavg**: pay-by-monthly average bandwidth
     *   **PayByBandwidth_month4th**: pay-by-fourth peak bandwidth per month
     *   **PayByBandwidth_monthday95avg**: pay-by-monthly average 95th percentile bandwidth
     *   **PayByBandwidth_nighthalf95**: pay-by-95th percentile bandwidth (50% off during nighttime)
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The lock status of secure DCDN.
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description The ID of the request.
     *
     * @example E20B46E1-9BCD-10E5-AAEF-6D7B737467A1
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The metering method for requests.
     *
     * @example PayBySecRequest
     *
     * @var string
     */
    public $requestType;

    /**
     * @description The time when secure DCDN was enabled.
     *
     * @example 2021-08-26T02:52:08Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The version of secure DCDN.
     *
     * @example enterprise
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'changingAffectTime' => 'ChangingAffectTime',
        'changingChargeType' => 'ChangingChargeType',
        'domainNum'          => 'DomainNum',
        'endTime'            => 'EndTime',
        'flowType'           => 'FlowType',
        'instanceId'         => 'InstanceId',
        'internetChargeType' => 'InternetChargeType',
        'operationLocks'     => 'OperationLocks',
        'requestId'          => 'RequestId',
        'requestType'        => 'RequestType',
        'startTime'          => 'StartTime',
        'version'            => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeDcdnsecServiceResponseBody
     */
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
