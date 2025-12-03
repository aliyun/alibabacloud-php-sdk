<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Dara\Model;

class DescribeScreenOperateInfoResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $dateArray;

    /**
     * @var int
     */
    public $healthCheckDealedCount;

    /**
     * @var string[]
     */
    public $healthCheckValueArray;

    /**
     * @var string
     */
    public $requestId;

    /**
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

    public function validate()
    {
        if (\is_array($this->dateArray)) {
            Model::validateArray($this->dateArray);
        }
        if (\is_array($this->healthCheckValueArray)) {
            Model::validateArray($this->healthCheckValueArray);
        }
        if (\is_array($this->suspEventValueArray)) {
            Model::validateArray($this->suspEventValueArray);
        }
        if (\is_array($this->vulValueArray)) {
            Model::validateArray($this->vulValueArray);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dateArray) {
            if (\is_array($this->dateArray)) {
                $res['DateArray'] = [];
                $n1 = 0;
                foreach ($this->dateArray as $item1) {
                    $res['DateArray'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->healthCheckDealedCount) {
            $res['HealthCheckDealedCount'] = $this->healthCheckDealedCount;
        }

        if (null !== $this->healthCheckValueArray) {
            if (\is_array($this->healthCheckValueArray)) {
                $res['HealthCheckValueArray'] = [];
                $n1 = 0;
                foreach ($this->healthCheckValueArray as $item1) {
                    $res['HealthCheckValueArray'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->securityEventDealedCount) {
            $res['SecurityEventDealedCount'] = $this->securityEventDealedCount;
        }

        if (null !== $this->suspEventValueArray) {
            if (\is_array($this->suspEventValueArray)) {
                $res['SuspEventValueArray'] = [];
                $n1 = 0;
                foreach ($this->suspEventValueArray as $item1) {
                    $res['SuspEventValueArray'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vulValueArray) {
            if (\is_array($this->vulValueArray)) {
                $res['VulValueArray'] = [];
                $n1 = 0;
                foreach ($this->vulValueArray as $item1) {
                    $res['VulValueArray'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vulnerabilityDealedCount) {
            $res['VulnerabilityDealedCount'] = $this->vulnerabilityDealedCount;
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
        if (isset($map['DateArray'])) {
            if (!empty($map['DateArray'])) {
                $model->dateArray = [];
                $n1 = 0;
                foreach ($map['DateArray'] as $item1) {
                    $model->dateArray[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HealthCheckDealedCount'])) {
            $model->healthCheckDealedCount = $map['HealthCheckDealedCount'];
        }

        if (isset($map['HealthCheckValueArray'])) {
            if (!empty($map['HealthCheckValueArray'])) {
                $model->healthCheckValueArray = [];
                $n1 = 0;
                foreach ($map['HealthCheckValueArray'] as $item1) {
                    $model->healthCheckValueArray[$n1] = $item1;
                    ++$n1;
                }
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
                $model->suspEventValueArray = [];
                $n1 = 0;
                foreach ($map['SuspEventValueArray'] as $item1) {
                    $model->suspEventValueArray[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VulValueArray'])) {
            if (!empty($map['VulValueArray'])) {
                $model->vulValueArray = [];
                $n1 = 0;
                foreach ($map['VulValueArray'] as $item1) {
                    $model->vulValueArray[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VulnerabilityDealedCount'])) {
            $model->vulnerabilityDealedCount = $map['VulnerabilityDealedCount'];
        }

        return $model;
    }
}
