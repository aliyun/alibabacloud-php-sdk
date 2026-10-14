<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\DescribeApplicationHealthCheckReportsResponseBody;

use AlibabaCloud\Dara\Model;

class reports extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string[]
     */
    public $failedAddresses;

    /**
     * @var string[]
     */
    public $failedRegions;

    /**
     * @var int
     */
    public $failureCount;

    /**
     * @var string[]
     */
    public $failureReasons;

    /**
     * @var string
     */
    public $healthCheckStatus;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $successCount;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'failedAddresses' => 'FailedAddresses',
        'failedRegions' => 'FailedRegions',
        'failureCount' => 'FailureCount',
        'failureReasons' => 'FailureReasons',
        'healthCheckStatus' => 'HealthCheckStatus',
        'mode' => 'Mode',
        'successCount' => 'SuccessCount',
    ];

    public function validate()
    {
        if (\is_array($this->failedAddresses)) {
            Model::validateArray($this->failedAddresses);
        }
        if (\is_array($this->failedRegions)) {
            Model::validateArray($this->failedRegions);
        }
        if (\is_array($this->failureReasons)) {
            Model::validateArray($this->failureReasons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->failedAddresses) {
            if (\is_array($this->failedAddresses)) {
                $res['FailedAddresses'] = [];
                $n1 = 0;
                foreach ($this->failedAddresses as $item1) {
                    $res['FailedAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->failedRegions) {
            if (\is_array($this->failedRegions)) {
                $res['FailedRegions'] = [];
                $n1 = 0;
                foreach ($this->failedRegions as $item1) {
                    $res['FailedRegions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->failureCount) {
            $res['FailureCount'] = $this->failureCount;
        }

        if (null !== $this->failureReasons) {
            if (\is_array($this->failureReasons)) {
                $res['FailureReasons'] = [];
                $n1 = 0;
                foreach ($this->failureReasons as $item1) {
                    $res['FailureReasons'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->healthCheckStatus) {
            $res['HealthCheckStatus'] = $this->healthCheckStatus;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['FailedAddresses'])) {
            if (!empty($map['FailedAddresses'])) {
                $model->failedAddresses = [];
                $n1 = 0;
                foreach ($map['FailedAddresses'] as $item1) {
                    $model->failedAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FailedRegions'])) {
            if (!empty($map['FailedRegions'])) {
                $model->failedRegions = [];
                $n1 = 0;
                foreach ($map['FailedRegions'] as $item1) {
                    $model->failedRegions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FailureCount'])) {
            $model->failureCount = $map['FailureCount'];
        }

        if (isset($map['FailureReasons'])) {
            if (!empty($map['FailureReasons'])) {
                $model->failureReasons = [];
                $n1 = 0;
                foreach ($map['FailureReasons'] as $item1) {
                    $model->failureReasons[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HealthCheckStatus'])) {
            $model->healthCheckStatus = $map['HealthCheckStatus'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        return $model;
    }
}
