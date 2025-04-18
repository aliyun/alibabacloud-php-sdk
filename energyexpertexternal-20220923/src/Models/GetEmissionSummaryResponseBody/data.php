<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEmissionSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $actualEmissionRatio;

    /**
     * @var float
     */
    public $carbonSaveConversion;

    /**
     * @var float
     */
    public $currentPeriodCarbonEmissionData;

    /**
     * @var bool
     */
    public $isWeighting;

    /**
     * @var float
     */
    public $lastPeriodCarbonEmissionData;

    /**
     * @var float
     */
    public $lastPeriodWeightingCarbonEmissionData;

    /**
     * @var float
     */
    public $ratio;

    /**
     * @var float
     */
    public $totalCarbonEmissionData;

    /**
     * @var float
     */
    public $weightingCarbonEmissionData;

    /**
     * @var float
     */
    public $weightingRatio;
    protected $_name = [
        'actualEmissionRatio' => 'actualEmissionRatio',
        'carbonSaveConversion' => 'carbonSaveConversion',
        'currentPeriodCarbonEmissionData' => 'currentPeriodCarbonEmissionData',
        'isWeighting' => 'isWeighting',
        'lastPeriodCarbonEmissionData' => 'lastPeriodCarbonEmissionData',
        'lastPeriodWeightingCarbonEmissionData' => 'lastPeriodWeightingCarbonEmissionData',
        'ratio' => 'ratio',
        'totalCarbonEmissionData' => 'totalCarbonEmissionData',
        'weightingCarbonEmissionData' => 'weightingCarbonEmissionData',
        'weightingRatio' => 'weightingRatio',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualEmissionRatio) {
            $res['actualEmissionRatio'] = $this->actualEmissionRatio;
        }

        if (null !== $this->carbonSaveConversion) {
            $res['carbonSaveConversion'] = $this->carbonSaveConversion;
        }

        if (null !== $this->currentPeriodCarbonEmissionData) {
            $res['currentPeriodCarbonEmissionData'] = $this->currentPeriodCarbonEmissionData;
        }

        if (null !== $this->isWeighting) {
            $res['isWeighting'] = $this->isWeighting;
        }

        if (null !== $this->lastPeriodCarbonEmissionData) {
            $res['lastPeriodCarbonEmissionData'] = $this->lastPeriodCarbonEmissionData;
        }

        if (null !== $this->lastPeriodWeightingCarbonEmissionData) {
            $res['lastPeriodWeightingCarbonEmissionData'] = $this->lastPeriodWeightingCarbonEmissionData;
        }

        if (null !== $this->ratio) {
            $res['ratio'] = $this->ratio;
        }

        if (null !== $this->totalCarbonEmissionData) {
            $res['totalCarbonEmissionData'] = $this->totalCarbonEmissionData;
        }

        if (null !== $this->weightingCarbonEmissionData) {
            $res['weightingCarbonEmissionData'] = $this->weightingCarbonEmissionData;
        }

        if (null !== $this->weightingRatio) {
            $res['weightingRatio'] = $this->weightingRatio;
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
        if (isset($map['actualEmissionRatio'])) {
            $model->actualEmissionRatio = $map['actualEmissionRatio'];
        }

        if (isset($map['carbonSaveConversion'])) {
            $model->carbonSaveConversion = $map['carbonSaveConversion'];
        }

        if (isset($map['currentPeriodCarbonEmissionData'])) {
            $model->currentPeriodCarbonEmissionData = $map['currentPeriodCarbonEmissionData'];
        }

        if (isset($map['isWeighting'])) {
            $model->isWeighting = $map['isWeighting'];
        }

        if (isset($map['lastPeriodCarbonEmissionData'])) {
            $model->lastPeriodCarbonEmissionData = $map['lastPeriodCarbonEmissionData'];
        }

        if (isset($map['lastPeriodWeightingCarbonEmissionData'])) {
            $model->lastPeriodWeightingCarbonEmissionData = $map['lastPeriodWeightingCarbonEmissionData'];
        }

        if (isset($map['ratio'])) {
            $model->ratio = $map['ratio'];
        }

        if (isset($map['totalCarbonEmissionData'])) {
            $model->totalCarbonEmissionData = $map['totalCarbonEmissionData'];
        }

        if (isset($map['weightingCarbonEmissionData'])) {
            $model->weightingCarbonEmissionData = $map['weightingCarbonEmissionData'];
        }

        if (isset($map['weightingRatio'])) {
            $model->weightingRatio = $map['weightingRatio'];
        }

        return $model;
    }
}
