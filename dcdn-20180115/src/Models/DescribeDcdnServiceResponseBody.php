<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnServiceResponseBody\operationLocks;
use AlibabaCloud\Tea\Model;

class DescribeDcdnServiceResponseBody extends Model
{
    /**
     * @description The time when the renewed secure DCDN takes effect. The time is displayed in UTC.
     *
     * @example 2018-03-31T16:00:00Z
     *
     * @var string
     */
    public $changingAffectTime;

    /**
     * @description The new metering method for the renewed secure DCDN. Valid values:
     *
     *   **PayByTraffic**: pay by data transfer
     *   **PayByBandwidth**: pay by bandwidth
     *   **PayByBandwidth95**: pay by 95th percentile bandwidth
     *   **PayByBandwidth_monthavg**: pay by monthly average bandwidth
     *   **PayByBandwidth_month4th**: pay by fourth peak bandwidth per month
     *   **PayByBandwidth_monthday95avg**: pay by monthly average 95th percentile bandwidth
     *   **PayByBandwidth_nighthalf95**: pay by 95th percentile bandwidth (50% off during nighttime)
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $changingChargeType;

    /**
     * @description The ID of the instance.
     *
     * @example FP-mkqgwxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The current metering method. Valid values:
     *
     *   **PayByTraffic**: pay by data transfer
     *   **PayByBandwidth**: pay by bandwidth
     *   **PayByBandwidth95**: pay by 95th percentile bandwidth
     *   **PayByBandwidth_monthavg**: pay by monthly average bandwidth
     *   **PayByBandwidth_month4th**: pay by fourth peak bandwidth per month
     *   **PayByBandwidth_monthday95avg**: pay by monthly average 95th percentile bandwidth
     *   **PayByBandwidth_nighthalf95**: pay by 95th percentile bandwidth (50% off during nighttime)
     *
     * @example PayByTraffic
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
     * @description The lock status of DCDN.
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description The request ID.
     *
     * @example EF2AEBC2-EDBD-41CF-BF64-7E095D42D6EF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the changes of the WebSocket configuration take effect. The value is the same as that of the ChangingAffectTime parameter. This parameter can be displayed in the console only if the specified time is later than the current time.
     *
     * @example 2018-03-19T11:16:11Z
     *
     * @var string
     */
    public $websocketChangingTime;

    /**
     * @description The next effective billing method of WebSocket. Valid values: **websockettraffic** and **websocketbps**. A value of websockettraffic indicates that you are billed based on the traffic volume. A value of websocketbps indicates that you are billed based on the bandwidth.
     *
     * @example websocketbps
     *
     * @var string
     */
    public $websocketChangingType;

    /**
     * @description The current billing method of WebSocket. Valid values: **websockettraffic** and **websocketbps**. A value of websockettraffic indicates that you are billed based on the traffic volume. A value of websocketbps indicates that you are billed based on the bandwidth.
     *
     * @example websocketbps
     *
     * @var string
     */
    public $websocketType;
    protected $_name = [
        'changingAffectTime'    => 'ChangingAffectTime',
        'changingChargeType'    => 'ChangingChargeType',
        'instanceId'            => 'InstanceId',
        'internetChargeType'    => 'InternetChargeType',
        'openingTime'           => 'OpeningTime',
        'operationLocks'        => 'OperationLocks',
        'requestId'             => 'RequestId',
        'websocketChangingTime' => 'WebsocketChangingTime',
        'websocketChangingType' => 'WebsocketChangingType',
        'websocketType'         => 'WebsocketType',
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
        if (null !== $this->websocketChangingTime) {
            $res['WebsocketChangingTime'] = $this->websocketChangingTime;
        }
        if (null !== $this->websocketChangingType) {
            $res['WebsocketChangingType'] = $this->websocketChangingType;
        }
        if (null !== $this->websocketType) {
            $res['WebsocketType'] = $this->websocketType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnServiceResponseBody
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
        if (isset($map['WebsocketChangingTime'])) {
            $model->websocketChangingTime = $map['WebsocketChangingTime'];
        }
        if (isset($map['WebsocketChangingType'])) {
            $model->websocketChangingType = $map['WebsocketChangingType'];
        }
        if (isset($map['WebsocketType'])) {
            $model->websocketType = $map['WebsocketType'];
        }

        return $model;
    }
}
