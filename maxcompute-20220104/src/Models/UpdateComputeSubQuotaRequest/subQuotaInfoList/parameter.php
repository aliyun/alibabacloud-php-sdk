<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeSubQuotaRequest\subQuotaInfoList;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description Specifies whether to enable the priority feature.
     *
     * @example false
     *
     * @var bool
     */
    public $enablePriority;

    /**
     * @description Specifies whether the quota is strongly exclusive.
     *
     * @example false
     *
     * @var bool
     */
    public $forceReservedMin;

    /**
     * @description The value of minCU in Reserved CUs.
     * > The value of maxCU must be less than or equal to the value of maxCU in the level-1 quota that you purchased.
     *
     * This parameter is required.
     *
     * @example 50
     *
     * @var int
     */
    public $maxCU;

    /**
     * @description The value of maxCU in Reserved CUs.
     * >
     * >- The total value of minCU in all the level-2 quotas is equal to the value of minCU in the level-1 quota.
     * >- The value of minCU must be less than or equal to the value of maxCU in the level-2 quota and less than or equal to the value of minCU in the level-1 quota that you purchased.
     *
     * This parameter is required.
     *
     * @example 50
     *
     * @var int
     */
    public $minCU;

    /**
     * @description Scheduling policy of the quota.
     *
     * @example Fifo/Fair
     *
     * @var string
     */
    public $schedulerType;

    /**
     * @description The upper limit for CUs that can be concurrently used by a job scheduled to the quota.
     *
     * @example 10
     *
     * @var int
     */
    public $singleJobCULimit;
    protected $_name = [
        'enablePriority' => 'enablePriority',
        'forceReservedMin' => 'forceReservedMin',
        'maxCU' => 'maxCU',
        'minCU' => 'minCU',
        'schedulerType' => 'schedulerType',
        'singleJobCULimit' => 'singleJobCULimit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enablePriority) {
            $res['enablePriority'] = $this->enablePriority;
        }
        if (null !== $this->forceReservedMin) {
            $res['forceReservedMin'] = $this->forceReservedMin;
        }
        if (null !== $this->maxCU) {
            $res['maxCU'] = $this->maxCU;
        }
        if (null !== $this->minCU) {
            $res['minCU'] = $this->minCU;
        }
        if (null !== $this->schedulerType) {
            $res['schedulerType'] = $this->schedulerType;
        }
        if (null !== $this->singleJobCULimit) {
            $res['singleJobCULimit'] = $this->singleJobCULimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enablePriority'])) {
            $model->enablePriority = $map['enablePriority'];
        }
        if (isset($map['forceReservedMin'])) {
            $model->forceReservedMin = $map['forceReservedMin'];
        }
        if (isset($map['maxCU'])) {
            $model->maxCU = $map['maxCU'];
        }
        if (isset($map['minCU'])) {
            $model->minCU = $map['minCU'];
        }
        if (isset($map['schedulerType'])) {
            $model->schedulerType = $map['schedulerType'];
        }
        if (isset($map['singleJobCULimit'])) {
            $model->singleJobCULimit = $map['singleJobCULimit'];
        }

        return $model;
    }
}
