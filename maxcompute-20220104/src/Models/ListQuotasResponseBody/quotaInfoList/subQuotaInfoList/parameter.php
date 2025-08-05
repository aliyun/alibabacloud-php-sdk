<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponseBody\quotaInfoList\subQuotaInfoList;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @var int
     */
    public $elasticReservedCU;

    /**
     * @var bool
     */
    public $enablePriority;

    /**
     * @var bool
     */
    public $forceReservedMin;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $maxCU;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $minCU;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var int
     */
    public $singleJobCULimit;
    protected $_name = [
        'elasticReservedCU' => 'elasticReservedCU',
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
        if (null !== $this->elasticReservedCU) {
            $res['elasticReservedCU'] = $this->elasticReservedCU;
        }
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
        if (isset($map['elasticReservedCU'])) {
            $model->elasticReservedCU = $map['elasticReservedCU'];
        }
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
