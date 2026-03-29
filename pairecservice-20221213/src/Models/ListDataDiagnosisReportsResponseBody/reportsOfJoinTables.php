<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisReportsResponseBody;

use AlibabaCloud\Dara\Model;

class reportsOfJoinTables extends Model
{
    /**
     * @var string
     */
    public $ds;

    /**
     * @var string
     */
    public $joinField;

    /**
     * @var string
     */
    public $leftExceptRate;

    /**
     * @var string
     */
    public $rightExceptRate;

    /**
     * @var string
     */
    public $flag;

    /**
     * @var string
     */
    public $featureName;

    /**
     * @var string
     */
    public $featureValue;

    /**
     * @var string
     */
    public $percent;

    /**
     * @var string
     */
    public $quantile;

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
    protected $_name = [
        'ds' => 'Ds',
        'joinField' => 'JoinField',
        'leftExceptRate' => 'LeftExceptRate',
        'rightExceptRate' => 'RightExceptRate',
        'flag' => 'Flag',
        'featureName' => 'FeatureName',
        'featureValue' => 'FeatureValue',
        'percent' => 'Percent',
        'quantile' => 'Quantile',
        'valueCount' => 'ValueCount',
        'valuePercent' => 'ValuePercent',
        'valueQuantile' => 'ValueQuantile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ds) {
            $res['Ds'] = $this->ds;
        }

        if (null !== $this->joinField) {
            $res['JoinField'] = $this->joinField;
        }

        if (null !== $this->leftExceptRate) {
            $res['LeftExceptRate'] = $this->leftExceptRate;
        }

        if (null !== $this->rightExceptRate) {
            $res['RightExceptRate'] = $this->rightExceptRate;
        }

        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }

        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }

        if (null !== $this->featureValue) {
            $res['FeatureValue'] = $this->featureValue;
        }

        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }

        if (null !== $this->quantile) {
            $res['Quantile'] = $this->quantile;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ds'])) {
            $model->ds = $map['Ds'];
        }

        if (isset($map['JoinField'])) {
            $model->joinField = $map['JoinField'];
        }

        if (isset($map['LeftExceptRate'])) {
            $model->leftExceptRate = $map['LeftExceptRate'];
        }

        if (isset($map['RightExceptRate'])) {
            $model->rightExceptRate = $map['RightExceptRate'];
        }

        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }

        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }

        if (isset($map['FeatureValue'])) {
            $model->featureValue = $map['FeatureValue'];
        }

        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }

        if (isset($map['Quantile'])) {
            $model->quantile = $map['Quantile'];
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

        return $model;
    }
}
