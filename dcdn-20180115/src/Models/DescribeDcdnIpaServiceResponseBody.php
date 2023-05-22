<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnIpaServiceResponseBody\operationLocks;
use AlibabaCloud\Tea\Model;

class DescribeDcdnIpaServiceResponseBody extends Model
{
    /**
     * @description The time when the change of the billing method starts to take effect. The time is in GMT. This time appears on the frontend only when it is later than the current time.
     *
     * @example 2018-03-31T16:00:00Z
     *
     * @var string
     */
    public $changingAffectTime;

    /**
     * @description The new billing method to take effect. Valid values:
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
     * @description The ID of the instance.
     *
     * @example 1883927335936173
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The billing method of the instance. Valid values:
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
    public $internetChargeType;

    /**
     * @description The time when the DCDN service was activated. The time follows the ISO 8601 standard.
     *
     * @example 2018-03-19T11:16:11Z
     *
     * @var string
     */
    public $openingTime;

    /**
     * @description The lock status of secure DCDN.
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description The ID of the request.
     *
     * @example EF2AEBC2-EDBD-41CF-BF64-7E095D42D6EF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'changingAffectTime' => 'ChangingAffectTime',
        'changingChargeType' => 'ChangingChargeType',
        'instanceId'         => 'InstanceId',
        'internetChargeType' => 'InternetChargeType',
        'openingTime'        => 'OpeningTime',
        'operationLocks'     => 'OperationLocks',
        'requestId'          => 'RequestId',
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
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnIpaServiceResponseBody
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
