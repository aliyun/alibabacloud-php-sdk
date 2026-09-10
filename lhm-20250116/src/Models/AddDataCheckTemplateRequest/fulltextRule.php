<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\AddDataCheckTemplateRequest;

use AlibabaCloud\Dara\Model;

class fulltextRule extends Model
{
    /**
     * @var int
     */
    public $checkMode;

    /**
     * @var int
     */
    public $columnEqualCmpType;

    /**
     * @var string
     */
    public $columnEqualCmpValues;

    /**
     * @var int
     */
    public $columnIsCosine;

    /**
     * @var int
     */
    public $columnIsIgnoreNull;

    /**
     * @var int
     */
    public $columnIsIgnoreZero;

    /**
     * @var int
     */
    public $columnIsSamples;

    /**
     * @var int
     */
    public $columnSamplesType;

    /**
     * @var int
     */
    public $columnSamplesValue;

    /**
     * @var int
     */
    public $columnSizeCmpType;

    /**
     * @var string
     */
    public $columnSizeCmpValues;

    /**
     * @var int
     */
    public $isPrimaryKeyCheck;

    /**
     * @var int
     */
    public $lineCheckType;

    /**
     * @var int
     */
    public $lineIsPrintAll;

    /**
     * @var int
     */
    public $lineIsSamples;

    /**
     * @var int
     */
    public $lineSamplesType;

    /**
     * @var int
     */
    public $lineSamplesValue;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'checkMode' => 'checkMode',
        'columnEqualCmpType' => 'columnEqualCmpType',
        'columnEqualCmpValues' => 'columnEqualCmpValues',
        'columnIsCosine' => 'columnIsCosine',
        'columnIsIgnoreNull' => 'columnIsIgnoreNull',
        'columnIsIgnoreZero' => 'columnIsIgnoreZero',
        'columnIsSamples' => 'columnIsSamples',
        'columnSamplesType' => 'columnSamplesType',
        'columnSamplesValue' => 'columnSamplesValue',
        'columnSizeCmpType' => 'columnSizeCmpType',
        'columnSizeCmpValues' => 'columnSizeCmpValues',
        'isPrimaryKeyCheck' => 'isPrimaryKeyCheck',
        'lineCheckType' => 'lineCheckType',
        'lineIsPrintAll' => 'lineIsPrintAll',
        'lineIsSamples' => 'lineIsSamples',
        'lineSamplesType' => 'lineSamplesType',
        'lineSamplesValue' => 'lineSamplesValue',
        'ruleId' => 'ruleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkMode) {
            $res['checkMode'] = $this->checkMode;
        }

        if (null !== $this->columnEqualCmpType) {
            $res['columnEqualCmpType'] = $this->columnEqualCmpType;
        }

        if (null !== $this->columnEqualCmpValues) {
            $res['columnEqualCmpValues'] = $this->columnEqualCmpValues;
        }

        if (null !== $this->columnIsCosine) {
            $res['columnIsCosine'] = $this->columnIsCosine;
        }

        if (null !== $this->columnIsIgnoreNull) {
            $res['columnIsIgnoreNull'] = $this->columnIsIgnoreNull;
        }

        if (null !== $this->columnIsIgnoreZero) {
            $res['columnIsIgnoreZero'] = $this->columnIsIgnoreZero;
        }

        if (null !== $this->columnIsSamples) {
            $res['columnIsSamples'] = $this->columnIsSamples;
        }

        if (null !== $this->columnSamplesType) {
            $res['columnSamplesType'] = $this->columnSamplesType;
        }

        if (null !== $this->columnSamplesValue) {
            $res['columnSamplesValue'] = $this->columnSamplesValue;
        }

        if (null !== $this->columnSizeCmpType) {
            $res['columnSizeCmpType'] = $this->columnSizeCmpType;
        }

        if (null !== $this->columnSizeCmpValues) {
            $res['columnSizeCmpValues'] = $this->columnSizeCmpValues;
        }

        if (null !== $this->isPrimaryKeyCheck) {
            $res['isPrimaryKeyCheck'] = $this->isPrimaryKeyCheck;
        }

        if (null !== $this->lineCheckType) {
            $res['lineCheckType'] = $this->lineCheckType;
        }

        if (null !== $this->lineIsPrintAll) {
            $res['lineIsPrintAll'] = $this->lineIsPrintAll;
        }

        if (null !== $this->lineIsSamples) {
            $res['lineIsSamples'] = $this->lineIsSamples;
        }

        if (null !== $this->lineSamplesType) {
            $res['lineSamplesType'] = $this->lineSamplesType;
        }

        if (null !== $this->lineSamplesValue) {
            $res['lineSamplesValue'] = $this->lineSamplesValue;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
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
        if (isset($map['checkMode'])) {
            $model->checkMode = $map['checkMode'];
        }

        if (isset($map['columnEqualCmpType'])) {
            $model->columnEqualCmpType = $map['columnEqualCmpType'];
        }

        if (isset($map['columnEqualCmpValues'])) {
            $model->columnEqualCmpValues = $map['columnEqualCmpValues'];
        }

        if (isset($map['columnIsCosine'])) {
            $model->columnIsCosine = $map['columnIsCosine'];
        }

        if (isset($map['columnIsIgnoreNull'])) {
            $model->columnIsIgnoreNull = $map['columnIsIgnoreNull'];
        }

        if (isset($map['columnIsIgnoreZero'])) {
            $model->columnIsIgnoreZero = $map['columnIsIgnoreZero'];
        }

        if (isset($map['columnIsSamples'])) {
            $model->columnIsSamples = $map['columnIsSamples'];
        }

        if (isset($map['columnSamplesType'])) {
            $model->columnSamplesType = $map['columnSamplesType'];
        }

        if (isset($map['columnSamplesValue'])) {
            $model->columnSamplesValue = $map['columnSamplesValue'];
        }

        if (isset($map['columnSizeCmpType'])) {
            $model->columnSizeCmpType = $map['columnSizeCmpType'];
        }

        if (isset($map['columnSizeCmpValues'])) {
            $model->columnSizeCmpValues = $map['columnSizeCmpValues'];
        }

        if (isset($map['isPrimaryKeyCheck'])) {
            $model->isPrimaryKeyCheck = $map['isPrimaryKeyCheck'];
        }

        if (isset($map['lineCheckType'])) {
            $model->lineCheckType = $map['lineCheckType'];
        }

        if (isset($map['lineIsPrintAll'])) {
            $model->lineIsPrintAll = $map['lineIsPrintAll'];
        }

        if (isset($map['lineIsSamples'])) {
            $model->lineIsSamples = $map['lineIsSamples'];
        }

        if (isset($map['lineSamplesType'])) {
            $model->lineSamplesType = $map['lineSamplesType'];
        }

        if (isset($map['lineSamplesValue'])) {
            $model->lineSamplesValue = $map['lineSamplesValue'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        return $model;
    }
}
