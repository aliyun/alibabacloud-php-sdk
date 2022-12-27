<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnServiceResponseBody\operationLocks;
use AlibabaCloud\Tea\Model;

class DescribeCdnServiceResponseBody extends Model
{
    /**
     * @description The time when the next billing method takes effect. The time is displayed in GMT.
     *
     * @example 2019-11-27T16:00:00Z
     *
     * @var string
     */
    public $changingAffectTime;

    /**
     * @description The next billing method that Alibaba Cloud CDN will use. Valid values:
     *
     *   **PayByTraffic**: pay-by-data-transfer.
     *   **PayByBandwidth**: pay-by-bandwidth.
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $changingChargeType;

    /**
     * @description The ID of the instance.
     *
     * @example aliuidxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The current billing method of Alibaba Cloud CDN.
     *
     *   **PayByTraffic**: pay-by-data-transfer.
     *   **PayByBandwidth**: pay-by-bandwidth.
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The time when Alibaba Cloud CDN was activated. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mmZ format.
     *
     * @example 2019-02-28T13:11:49Z
     *
     * @var string
     */
    public $openingTime;

    /**
     * @description The lock status of Alibaba Cloud CDN.
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description The ID of the request.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
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
     * @return DescribeCdnServiceResponseBody
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
