<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupOperationResponseBody\stackGroupOperation;

use AlibabaCloud\Tea\Model;

class operationPreferences extends Model
{
    /**
     * @description The maximum number of stack operation failures that can occur within the accounts in each region. When the value is exceeded, the operation fails to be performed in the region. If the operation fails to be performed in one region, the operation fails to be performed in other regions.
     *
     * >  Only one of the FailureToleranceCount and FailureTolerancePercentage parameters is returned.
     * @example 1
     *
     * @var int
     */
    public $failureToleranceCount;

    /**
     * @description The percentage of the total number of accounts within which stack operation failures can occur to the total number of accounts in each region. When the value is exceeded, the operation fails to be performed in the region.
     *
     * >  Only one of the FailureToleranceCount and FailureTolerancePercentage parameters is returned.
     * @example 10
     *
     * @var int
     */
    public $failureTolerancePercentage;

    /**
     * @description The maximum number of accounts within which operations are performed on stacks concurrently in each region.
     *
     * >  Only one of the MaxConcurrentCount and MaxConcurrentPercentage parameters is returned.
     * @example 1
     *
     * @var int
     */
    public $maxConcurrentCount;

    /**
     * @description The percentage of the total number of accounts within which operations are performed on stacks concurrently to the total number of accounts in each region.
     *
     * >  Only one of the MaxConcurrentCount and MaxConcurrentPercentage parameters is returned.
     * @example 10
     *
     * @var int
     */
    public $maxConcurrentPercentage;

    /**
     * @description The regions in the order of which the operation is performed.
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
