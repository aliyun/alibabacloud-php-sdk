<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetEmissionSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Percentage of scheduled.
     *
     * @example 2.7657
     *
     * @var float
     */
    public $actualEmissionRatio;

    /**
     * @description Carbon emissions reduction.
     *
     * @example 0.0
     *
     * @var float
     */
    public $carbonSaveConversion;

    /**
     * @description Statistical indicators for this cycle.
     *
     * @example 276.4
     *
     * @var float
     */
    public $currentPeriodCarbonEmissionData;

    /**
     * @description Whether to show the weighting ratio carbon emission.
     *
     * @example true
     *
     * @var bool
     */
    public $isWeighting;

    /**
     * @description Last period statistical indicators.
     *
     * @example 9.40100
     *
     * @var float
     */
    public $lastPeriodCarbonEmissionData;

    /**
     * @description Calculation of carbon emissions based on shareholding ratio in the last cycle.
     *
     * @example 8.4609
     *
     * @var float
     */
    public $lastPeriodWeightingCarbonEmissionData;

    /**
     * @description Year-on-year.
     *
     * @example 28.410
     *
     * @var float
     */
    public $ratio;

    /**
     * @description Total carbon emissions.
     *
     * @example 276.46
     *
     * @var float
     */
    public $totalCarbonEmissionData;

    /**
     * @description Calculate carbon emissions by share ratio
     *
     * @example 248.81400
     *
     * @var float
     */
    public $weightingCarbonEmissionData;

    /**
     * @description Year-on-year of weighting ratio carbon emissions.
     *
     * @example 28.4102
     *
     * @var float
     */
    public $weightingRatio;
    protected $_name = [
        'actualEmissionRatio'                   => 'actualEmissionRatio',
        'carbonSaveConversion'                  => 'carbonSaveConversion',
        'currentPeriodCarbonEmissionData'       => 'currentPeriodCarbonEmissionData',
        'isWeighting'                           => 'isWeighting',
        'lastPeriodCarbonEmissionData'          => 'lastPeriodCarbonEmissionData',
        'lastPeriodWeightingCarbonEmissionData' => 'lastPeriodWeightingCarbonEmissionData',
        'ratio'                                 => 'ratio',
        'totalCarbonEmissionData'               => 'totalCarbonEmissionData',
        'weightingCarbonEmissionData'           => 'weightingCarbonEmissionData',
        'weightingRatio'                        => 'weightingRatio',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
