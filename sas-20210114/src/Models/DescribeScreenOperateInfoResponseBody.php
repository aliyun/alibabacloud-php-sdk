<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Tea\Model;

class DescribeScreenOperateInfoResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $dateArray;

    /**
     * @example 1
     *
     * @var int
     */
    public $healthCheckDealedCount;

    /**
     * @var string[]
     */
    public $healthCheckValueArray;

    /**
     * @example 23AD0BD2-8771-5647-819E-6xxxxxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $securityEventDealedCount;

    /**
     * @var string[]
     */
    public $suspEventValueArray;

    /**
     * @var string[]
     */
    public $vulValueArray;

    /**
     * @example 1
     *
     * @var int
     */
    public $vulnerabilityDealedCount;
    protected $_name = [
        'dateArray' => 'DateArray',
        'healthCheckDealedCount' => 'HealthCheckDealedCount',
        'healthCheckValueArray' => 'HealthCheckValueArray',
        'requestId' => 'RequestId',
        'securityEventDealedCount' => 'SecurityEventDealedCount',
        'suspEventValueArray' => 'SuspEventValueArray',
        'vulValueArray' => 'VulValueArray',
        'vulnerabilityDealedCount' => 'VulnerabilityDealedCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dateArray) {
            $res['DateArray'] = $this->dateArray;
        }
        if (null !== $this->healthCheckDealedCount) {
            $res['HealthCheckDealedCount'] = $this->healthCheckDealedCount;
        }
        if (null !== $this->healthCheckValueArray) {
            $res['HealthCheckValueArray'] = $this->healthCheckValueArray;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityEventDealedCount) {
            $res['SecurityEventDealedCount'] = $this->securityEventDealedCount;
        }
        if (null !== $this->suspEventValueArray) {
            $res['SuspEventValueArray'] = $this->suspEventValueArray;
        }
        if (null !== $this->vulValueArray) {
            $res['VulValueArray'] = $this->vulValueArray;
        }
        if (null !== $this->vulnerabilityDealedCount) {
            $res['VulnerabilityDealedCount'] = $this->vulnerabilityDealedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenOperateInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DateArray'])) {
            if (!empty($map['DateArray'])) {
                $model->dateArray = $map['DateArray'];
            }
        }
        if (isset($map['HealthCheckDealedCount'])) {
            $model->healthCheckDealedCount = $map['HealthCheckDealedCount'];
        }
        if (isset($map['HealthCheckValueArray'])) {
            if (!empty($map['HealthCheckValueArray'])) {
                $model->healthCheckValueArray = $map['HealthCheckValueArray'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityEventDealedCount'])) {
            $model->securityEventDealedCount = $map['SecurityEventDealedCount'];
        }
        if (isset($map['SuspEventValueArray'])) {
            if (!empty($map['SuspEventValueArray'])) {
                $model->suspEventValueArray = $map['SuspEventValueArray'];
            }
        }
        if (isset($map['VulValueArray'])) {
            if (!empty($map['VulValueArray'])) {
                $model->vulValueArray = $map['VulValueArray'];
            }
        }
        if (isset($map['VulnerabilityDealedCount'])) {
            $model->vulnerabilityDealedCount = $map['VulnerabilityDealedCount'];
        }

        return $model;
    }
}
