<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation;

use AlibabaCloud\Tea\Model;

class operationPreferences extends Model
{
    /**
     * @var int
     */
    public $maxConcurrentCount;

    /**
     * @var int
     */
    public $failureToleranceCount;

    /**
     * @var int
     */
    public $maxConcurrentPercentage;

    /**
     * @var string[]
     */
    public $regionIdsOrder;

    /**
     * @var int
     */
    public $failureTolerancePercentage;
    protected $_name = [
        'maxConcurrentCount'         => 'MaxConcurrentCount',
        'failureToleranceCount'      => 'FailureToleranceCount',
        'maxConcurrentPercentage'    => 'MaxConcurrentPercentage',
        'regionIdsOrder'             => 'RegionIdsOrder',
        'failureTolerancePercentage' => 'FailureTolerancePercentage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxConcurrentCount) {
            $res['MaxConcurrentCount'] = $this->maxConcurrentCount;
        }
        if (null !== $this->failureToleranceCount) {
            $res['FailureToleranceCount'] = $this->failureToleranceCount;
        }
        if (null !== $this->maxConcurrentPercentage) {
            $res['MaxConcurrentPercentage'] = $this->maxConcurrentPercentage;
        }
        if (null !== $this->regionIdsOrder) {
            $res['RegionIdsOrder'] = $this->regionIdsOrder;
        }
        if (null !== $this->failureTolerancePercentage) {
            $res['FailureTolerancePercentage'] = $this->failureTolerancePercentage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationPreferences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxConcurrentCount'])) {
            $model->maxConcurrentCount = $map['MaxConcurrentCount'];
        }
        if (isset($map['FailureToleranceCount'])) {
            $model->failureToleranceCount = $map['FailureToleranceCount'];
        }
        if (isset($map['MaxConcurrentPercentage'])) {
            $model->maxConcurrentPercentage = $map['MaxConcurrentPercentage'];
        }
        if (isset($map['RegionIdsOrder'])) {
            if (!empty($map['RegionIdsOrder'])) {
                $model->regionIdsOrder = $map['RegionIdsOrder'];
            }
        }
        if (isset($map['FailureTolerancePercentage'])) {
            $model->failureTolerancePercentage = $map['FailureTolerancePercentage'];
        }

        return $model;
    }
}
