<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListQuotasResponseBody\quotaInfoList\subQuotaInfoList;

use AlibabaCloud\Dara\Model;

class parameter extends Model
{
    /**
     * @var int
     */
    public $adhocSlot;

    /**
     * @var int
     */
    public $autoScaleCPULimit;

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
     * @var int
     */
    public $maxCU;

    /**
     * @var int
     */
    public $maxGu;

    /**
     * @var int
     */
    public $minCU;

    /**
     * @var int
     */
    public $minGu;

    /**
     * @var string
     */
    public $schedulerType;

    /**
     * @var int
     */
    public $singleJobCULimit;

    /**
     * @var int
     */
    public $slotNum;
    protected $_name = [
        'adhocSlot' => 'adhocSlot',
        'autoScaleCPULimit' => 'autoScaleCPULimit',
        'elasticReservedCU' => 'elasticReservedCU',
        'enablePriority' => 'enablePriority',
        'forceReservedMin' => 'forceReservedMin',
        'maxCU' => 'maxCU',
        'maxGu' => 'maxGu',
        'minCU' => 'minCU',
        'minGu' => 'minGu',
        'schedulerType' => 'schedulerType',
        'singleJobCULimit' => 'singleJobCULimit',
        'slotNum' => 'slotNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adhocSlot) {
            $res['adhocSlot'] = $this->adhocSlot;
        }

        if (null !== $this->autoScaleCPULimit) {
            $res['autoScaleCPULimit'] = $this->autoScaleCPULimit;
        }

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

        if (null !== $this->maxGu) {
            $res['maxGu'] = $this->maxGu;
        }

        if (null !== $this->minCU) {
            $res['minCU'] = $this->minCU;
        }

        if (null !== $this->minGu) {
            $res['minGu'] = $this->minGu;
        }

        if (null !== $this->schedulerType) {
            $res['schedulerType'] = $this->schedulerType;
        }

        if (null !== $this->singleJobCULimit) {
            $res['singleJobCULimit'] = $this->singleJobCULimit;
        }

        if (null !== $this->slotNum) {
            $res['slotNum'] = $this->slotNum;
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
        if (isset($map['adhocSlot'])) {
            $model->adhocSlot = $map['adhocSlot'];
        }

        if (isset($map['autoScaleCPULimit'])) {
            $model->autoScaleCPULimit = $map['autoScaleCPULimit'];
        }

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

        if (isset($map['maxGu'])) {
            $model->maxGu = $map['maxGu'];
        }

        if (isset($map['minCU'])) {
            $model->minCU = $map['minCU'];
        }

        if (isset($map['minGu'])) {
            $model->minGu = $map['minGu'];
        }

        if (isset($map['schedulerType'])) {
            $model->schedulerType = $map['schedulerType'];
        }

        if (isset($map['singleJobCULimit'])) {
            $model->singleJobCULimit = $map['singleJobCULimit'];
        }

        if (isset($map['slotNum'])) {
            $model->slotNum = $map['slotNum'];
        }

        return $model;
    }
}
