<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsResponseBody;

use AlibabaCloud\Dara\Model;

class reportsOfBaseStatistics extends Model
{
    /**
     * @var string
     */
    public $defaultNullCount;

    /**
     * @var string
     */
    public $defaultNullRate;

    /**
     * @var string
     */
    public $ds;

    /**
     * @var string
     */
    public $featureName;

    /**
     * @var string
     */
    public $featureType;

    /**
     * @var string
     */
    public $nullCount;

    /**
     * @var string
     */
    public $nullRate;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var string
     */
    public $uniqueCount;

    /**
     * @var string
     */
    public $valueMax;

    /**
     * @var string
     */
    public $valueMedian;

    /**
     * @var string
     */
    public $valueMin;

    /**
     * @var string
     */
    public $valueQuantile1;

    /**
     * @var string
     */
    public $valueQuantile5;

    /**
     * @var string
     */
    public $valueQuantile25;

    /**
     * @var string
     */
    public $valueQuantile75;

    /**
     * @var string
     */
    public $valueQuantile95;

    /**
     * @var string
     */
    public $valueQuantile99;

    /**
     * @var string
     */
    public $rn;

    /**
     * @var string
     */
    public $frequencyMax;

    /**
     * @var string
     */
    public $frequencyMedian;

    /**
     * @var string
     */
    public $frequencyMin;

    /**
     * @var string
     */
    public $frequencyQuantile1;

    /**
     * @var string
     */
    public $frequencyQuantile5;

    /**
     * @var string
     */
    public $frequencyQuantile25;

    /**
     * @var string
     */
    public $frequencyQuantile75;

    /**
     * @var string
     */
    public $frequencyQuantile95;

    /**
     * @var string
     */
    public $frequencyQuantile99;

    /**
     * @var string
     */
    public $distribution;

    /**
     * @var string
     */
    public $rankId;

    /**
     * @var string
     */
    public $featureValue;

    /**
     * @var string
     */
    public $valueCount;

    /**
     * @var string
     */
    public $valuePercent;

    /**
     * @var string
     */
    public $valueQuantile;

    /**
     * @var string
     */
    public $featureFrequency;

    /**
     * @var string
     */
    public $frequencyCount;

    /**
     * @var string
     */
    public $frequencyPercent;

    /**
     * @var string
     */
    public $frequencyQuantile;
    protected $_name = [
        'defaultNullCount' => 'DefaultNullCount',
        'defaultNullRate' => 'DefaultNullRate',
        'ds' => 'Ds',
        'featureName' => 'FeatureName',
        'featureType' => 'FeatureType',
        'nullCount' => 'NullCount',
        'nullRate' => 'NullRate',
        'totalCount' => 'TotalCount',
        'uniqueCount' => 'UniqueCount',
        'valueMax' => 'ValueMax',
        'valueMedian' => 'ValueMedian',
        'valueMin' => 'ValueMin',
        'valueQuantile1' => 'ValueQuantile1',
        'valueQuantile5' => 'ValueQuantile5',
        'valueQuantile25' => 'ValueQuantile25',
        'valueQuantile75' => 'ValueQuantile75',
        'valueQuantile95' => 'ValueQuantile95',
        'valueQuantile99' => 'ValueQuantile99',
        'rn' => 'Rn',
        'frequencyMax' => 'FrequencyMax',
        'frequencyMedian' => 'FrequencyMedian',
        'frequencyMin' => 'FrequencyMin',
        'frequencyQuantile1' => 'FrequencyQuantile1',
        'frequencyQuantile5' => 'FrequencyQuantile5',
        'frequencyQuantile25' => 'FrequencyQuantile25',
        'frequencyQuantile75' => 'FrequencyQuantile75',
        'frequencyQuantile95' => 'FrequencyQuantile95',
        'frequencyQuantile99' => 'FrequencyQuantile99',
        'distribution' => 'Distribution',
        'rankId' => 'RankId',
        'featureValue' => 'FeatureValue',
        'valueCount' => 'ValueCount',
        'valuePercent' => 'ValuePercent',
        'valueQuantile' => 'ValueQuantile',
        'featureFrequency' => 'FeatureFrequency',
        'frequencyCount' => 'FrequencyCount',
        'frequencyPercent' => 'FrequencyPercent',
        'frequencyQuantile' => 'FrequencyQuantile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultNullCount) {
            $res['DefaultNullCount'] = $this->defaultNullCount;
        }

        if (null !== $this->defaultNullRate) {
            $res['DefaultNullRate'] = $this->defaultNullRate;
        }

        if (null !== $this->ds) {
            $res['Ds'] = $this->ds;
        }

        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }

        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }

        if (null !== $this->nullCount) {
            $res['NullCount'] = $this->nullCount;
        }

        if (null !== $this->nullRate) {
            $res['NullRate'] = $this->nullRate;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->uniqueCount) {
            $res['UniqueCount'] = $this->uniqueCount;
        }

        if (null !== $this->valueMax) {
            $res['ValueMax'] = $this->valueMax;
        }

        if (null !== $this->valueMedian) {
            $res['ValueMedian'] = $this->valueMedian;
        }

        if (null !== $this->valueMin) {
            $res['ValueMin'] = $this->valueMin;
        }

        if (null !== $this->valueQuantile1) {
            $res['ValueQuantile1'] = $this->valueQuantile1;
        }

        if (null !== $this->valueQuantile5) {
            $res['ValueQuantile5'] = $this->valueQuantile5;
        }

        if (null !== $this->valueQuantile25) {
            $res['ValueQuantile25'] = $this->valueQuantile25;
        }

        if (null !== $this->valueQuantile75) {
            $res['ValueQuantile75'] = $this->valueQuantile75;
        }

        if (null !== $this->valueQuantile95) {
            $res['ValueQuantile95'] = $this->valueQuantile95;
        }

        if (null !== $this->valueQuantile99) {
            $res['ValueQuantile99'] = $this->valueQuantile99;
        }

        if (null !== $this->rn) {
            $res['Rn'] = $this->rn;
        }

        if (null !== $this->frequencyMax) {
            $res['FrequencyMax'] = $this->frequencyMax;
        }

        if (null !== $this->frequencyMedian) {
            $res['FrequencyMedian'] = $this->frequencyMedian;
        }

        if (null !== $this->frequencyMin) {
            $res['FrequencyMin'] = $this->frequencyMin;
        }

        if (null !== $this->frequencyQuantile1) {
            $res['FrequencyQuantile1'] = $this->frequencyQuantile1;
        }

        if (null !== $this->frequencyQuantile5) {
            $res['FrequencyQuantile5'] = $this->frequencyQuantile5;
        }

        if (null !== $this->frequencyQuantile25) {
            $res['FrequencyQuantile25'] = $this->frequencyQuantile25;
        }

        if (null !== $this->frequencyQuantile75) {
            $res['FrequencyQuantile75'] = $this->frequencyQuantile75;
        }

        if (null !== $this->frequencyQuantile95) {
            $res['FrequencyQuantile95'] = $this->frequencyQuantile95;
        }

        if (null !== $this->frequencyQuantile99) {
            $res['FrequencyQuantile99'] = $this->frequencyQuantile99;
        }

        if (null !== $this->distribution) {
            $res['Distribution'] = $this->distribution;
        }

        if (null !== $this->rankId) {
            $res['RankId'] = $this->rankId;
        }

        if (null !== $this->featureValue) {
            $res['FeatureValue'] = $this->featureValue;
        }

        if (null !== $this->valueCount) {
            $res['ValueCount'] = $this->valueCount;
        }

        if (null !== $this->valuePercent) {
            $res['ValuePercent'] = $this->valuePercent;
        }

        if (null !== $this->valueQuantile) {
            $res['ValueQuantile'] = $this->valueQuantile;
        }

        if (null !== $this->featureFrequency) {
            $res['FeatureFrequency'] = $this->featureFrequency;
        }

        if (null !== $this->frequencyCount) {
            $res['FrequencyCount'] = $this->frequencyCount;
        }

        if (null !== $this->frequencyPercent) {
            $res['FrequencyPercent'] = $this->frequencyPercent;
        }

        if (null !== $this->frequencyQuantile) {
            $res['FrequencyQuantile'] = $this->frequencyQuantile;
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
        if (isset($map['DefaultNullCount'])) {
            $model->defaultNullCount = $map['DefaultNullCount'];
        }

        if (isset($map['DefaultNullRate'])) {
            $model->defaultNullRate = $map['DefaultNullRate'];
        }

        if (isset($map['Ds'])) {
            $model->ds = $map['Ds'];
        }

        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }

        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }

        if (isset($map['NullCount'])) {
            $model->nullCount = $map['NullCount'];
        }

        if (isset($map['NullRate'])) {
            $model->nullRate = $map['NullRate'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UniqueCount'])) {
            $model->uniqueCount = $map['UniqueCount'];
        }

        if (isset($map['ValueMax'])) {
            $model->valueMax = $map['ValueMax'];
        }

        if (isset($map['ValueMedian'])) {
            $model->valueMedian = $map['ValueMedian'];
        }

        if (isset($map['ValueMin'])) {
            $model->valueMin = $map['ValueMin'];
        }

        if (isset($map['ValueQuantile1'])) {
            $model->valueQuantile1 = $map['ValueQuantile1'];
        }

        if (isset($map['ValueQuantile5'])) {
            $model->valueQuantile5 = $map['ValueQuantile5'];
        }

        if (isset($map['ValueQuantile25'])) {
            $model->valueQuantile25 = $map['ValueQuantile25'];
        }

        if (isset($map['ValueQuantile75'])) {
            $model->valueQuantile75 = $map['ValueQuantile75'];
        }

        if (isset($map['ValueQuantile95'])) {
            $model->valueQuantile95 = $map['ValueQuantile95'];
        }

        if (isset($map['ValueQuantile99'])) {
            $model->valueQuantile99 = $map['ValueQuantile99'];
        }

        if (isset($map['Rn'])) {
            $model->rn = $map['Rn'];
        }

        if (isset($map['FrequencyMax'])) {
            $model->frequencyMax = $map['FrequencyMax'];
        }

        if (isset($map['FrequencyMedian'])) {
            $model->frequencyMedian = $map['FrequencyMedian'];
        }

        if (isset($map['FrequencyMin'])) {
            $model->frequencyMin = $map['FrequencyMin'];
        }

        if (isset($map['FrequencyQuantile1'])) {
            $model->frequencyQuantile1 = $map['FrequencyQuantile1'];
        }

        if (isset($map['FrequencyQuantile5'])) {
            $model->frequencyQuantile5 = $map['FrequencyQuantile5'];
        }

        if (isset($map['FrequencyQuantile25'])) {
            $model->frequencyQuantile25 = $map['FrequencyQuantile25'];
        }

        if (isset($map['FrequencyQuantile75'])) {
            $model->frequencyQuantile75 = $map['FrequencyQuantile75'];
        }

        if (isset($map['FrequencyQuantile95'])) {
            $model->frequencyQuantile95 = $map['FrequencyQuantile95'];
        }

        if (isset($map['FrequencyQuantile99'])) {
            $model->frequencyQuantile99 = $map['FrequencyQuantile99'];
        }

        if (isset($map['Distribution'])) {
            $model->distribution = $map['Distribution'];
        }

        if (isset($map['RankId'])) {
            $model->rankId = $map['RankId'];
        }

        if (isset($map['FeatureValue'])) {
            $model->featureValue = $map['FeatureValue'];
        }

        if (isset($map['ValueCount'])) {
            $model->valueCount = $map['ValueCount'];
        }

        if (isset($map['ValuePercent'])) {
            $model->valuePercent = $map['ValuePercent'];
        }

        if (isset($map['ValueQuantile'])) {
            $model->valueQuantile = $map['ValueQuantile'];
        }

        if (isset($map['FeatureFrequency'])) {
            $model->featureFrequency = $map['FeatureFrequency'];
        }

        if (isset($map['FrequencyCount'])) {
            $model->frequencyCount = $map['FrequencyCount'];
        }

        if (isset($map['FrequencyPercent'])) {
            $model->frequencyPercent = $map['FrequencyPercent'];
        }

        if (isset($map['FrequencyQuantile'])) {
            $model->frequencyQuantile = $map['FrequencyQuantile'];
        }

        return $model;
    }
}
