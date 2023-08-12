<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation;

use AlibabaCloud\Tea\Model;

class operationPreferences extends Model
{
    /**
     * @description The number of accounts within which stack operation failures are allowed to occur in each region. If the value of this parameter is exceeded in a region, Resource Orchestration Service (ROS) stops the operation in the region. If the operation is stopped in one region, the operation is no longer performed in other regions.
     *
     * > Only one of FailureToleranceCount and FailureTolerancePercentage can be returned.
     * @example 1
     *
     * @var int
     */
    public $failureToleranceCount;

    /**
     * @description The percentage of the number of accounts within which stack operation failures are allowed to occur to the total number of accounts in each region. If the value of this parameter is exceeded in a region, ROS stops the operation in the region.
     *
     * > Only one of FailureToleranceCount and FailureTolerancePercentage can be returned.
     * @example 10
     *
     * @var int
     */
    public $failureTolerancePercentage;

    /**
     * @description The maximum number of accounts within which stacks are deployed at the same time in each region.
     *
     * > Only one of MaxConcurrentCount and MaxConcurrentPercentage can be returned.
     * @example 1
     *
     * @var int
     */
    public $maxConcurrentCount;

    /**
     * @description The percentage of the maximum number of accounts within which stacks are deployed at the same time to the total number of accounts in each region.
     *
     * > Only one of MaxConcurrentCount and MaxConcurrentPercentage can be returned.
     * @example 10
     *
     * @var int
     */
    public $maxConcurrentPercentage;

    /**
     * @description The regions in the order of operation execution.
     *
     * @var string[]
     */
    public $regionIdsOrder;
    protected $_name = [
        'failureToleranceCount'      => 'FailureToleranceCount',
        'failureTolerancePercentage' => 'FailureTolerancePercentage',
        'maxConcurrentCount'         => 'MaxConcurrentCount',
        'maxConcurrentPercentage'    => 'MaxConcurrentPercentage',
        'regionIdsOrder'             => 'RegionIdsOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failureToleranceCount) {
            $res['FailureToleranceCount'] = $this->failureToleranceCount;
        }
        if (null !== $this->failureTolerancePercentage) {
            $res['FailureTolerancePercentage'] = $this->failureTolerancePercentage;
        }
        if (null !== $this->maxConcurrentCount) {
            $res['MaxConcurrentCount'] = $this->maxConcurrentCount;
        }
        if (null !== $this->maxConcurrentPercentage) {
            $res['MaxConcurrentPercentage'] = $this->maxConcurrentPercentage;
        }
        if (null !== $this->regionIdsOrder) {
            $res['RegionIdsOrder'] = $this->regionIdsOrder;
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
        if (isset($map['FailureToleranceCount'])) {
            $model->failureToleranceCount = $map['FailureToleranceCount'];
        }
        if (isset($map['FailureTolerancePercentage'])) {
            $model->failureTolerancePercentage = $map['FailureTolerancePercentage'];
        }
        if (isset($map['MaxConcurrentCount'])) {
            $model->maxConcurrentCount = $map['MaxConcurrentCount'];
        }
        if (isset($map['MaxConcurrentPercentage'])) {
            $model->maxConcurrentPercentage = $map['MaxConcurrentPercentage'];
        }
        if (isset($map['RegionIdsOrder'])) {
            if (!empty($map['RegionIdsOrder'])) {
                $model->regionIdsOrder = $map['RegionIdsOrder'];
            }
        }

        return $model;
    }
}
