<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetDataCheckTemplateResponseBody\data;

use AlibabaCloud\Dara\Model;

class metricRules extends Model
{
    /**
     * @var string
     */
    public $checkMethods;

    /**
     * @var int
     */
    public $dataTypeClassify;

    /**
     * @var int
     */
    public $dataTypeGroup;

    /**
     * @var string[]
     */
    public $dataTypeList;

    /**
     * @var string
     */
    public $dataTypes;

    /**
     * @var int
     */
    public $diffTolerateType;

    /**
     * @var mixed[]
     */
    public $diffTolerateValues;

    /**
     * @var int
     */
    public $enableDecimalScale;

    /**
     * @var string
     */
    public $filterColumnName;

    /**
     * @var int
     */
    public $ignoreDecimalScaleSuffixZero;

    /**
     * @var int
     */
    public $ignoreNumericZero;

    /**
     * @var int
     */
    public $ignoreStringEmpty;

    /**
     * @var int
     */
    public $isCountCheck;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $setDecimalScale;
    protected $_name = [
        'checkMethods' => 'checkMethods',
        'dataTypeClassify' => 'dataTypeClassify',
        'dataTypeGroup' => 'dataTypeGroup',
        'dataTypeList' => 'dataTypeList',
        'dataTypes' => 'dataTypes',
        'diffTolerateType' => 'diffTolerateType',
        'diffTolerateValues' => 'diffTolerateValues',
        'enableDecimalScale' => 'enableDecimalScale',
        'filterColumnName' => 'filterColumnName',
        'ignoreDecimalScaleSuffixZero' => 'ignoreDecimalScaleSuffixZero',
        'ignoreNumericZero' => 'ignoreNumericZero',
        'ignoreStringEmpty' => 'ignoreStringEmpty',
        'isCountCheck' => 'isCountCheck',
        'ruleId' => 'ruleId',
        'setDecimalScale' => 'setDecimalScale',
    ];

    public function validate()
    {
        if (\is_array($this->dataTypeList)) {
            Model::validateArray($this->dataTypeList);
        }
        if (\is_array($this->diffTolerateValues)) {
            Model::validateArray($this->diffTolerateValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkMethods) {
            $res['checkMethods'] = $this->checkMethods;
        }

        if (null !== $this->dataTypeClassify) {
            $res['dataTypeClassify'] = $this->dataTypeClassify;
        }

        if (null !== $this->dataTypeGroup) {
            $res['dataTypeGroup'] = $this->dataTypeGroup;
        }

        if (null !== $this->dataTypeList) {
            if (\is_array($this->dataTypeList)) {
                $res['dataTypeList'] = [];
                $n1 = 0;
                foreach ($this->dataTypeList as $item1) {
                    $res['dataTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataTypes) {
            $res['dataTypes'] = $this->dataTypes;
        }

        if (null !== $this->diffTolerateType) {
            $res['diffTolerateType'] = $this->diffTolerateType;
        }

        if (null !== $this->diffTolerateValues) {
            if (\is_array($this->diffTolerateValues)) {
                $res['diffTolerateValues'] = [];
                foreach ($this->diffTolerateValues as $key1 => $value1) {
                    $res['diffTolerateValues'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->enableDecimalScale) {
            $res['enableDecimalScale'] = $this->enableDecimalScale;
        }

        if (null !== $this->filterColumnName) {
            $res['filterColumnName'] = $this->filterColumnName;
        }

        if (null !== $this->ignoreDecimalScaleSuffixZero) {
            $res['ignoreDecimalScaleSuffixZero'] = $this->ignoreDecimalScaleSuffixZero;
        }

        if (null !== $this->ignoreNumericZero) {
            $res['ignoreNumericZero'] = $this->ignoreNumericZero;
        }

        if (null !== $this->ignoreStringEmpty) {
            $res['ignoreStringEmpty'] = $this->ignoreStringEmpty;
        }

        if (null !== $this->isCountCheck) {
            $res['isCountCheck'] = $this->isCountCheck;
        }

        if (null !== $this->ruleId) {
            $res['ruleId'] = $this->ruleId;
        }

        if (null !== $this->setDecimalScale) {
            $res['setDecimalScale'] = $this->setDecimalScale;
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
        if (isset($map['checkMethods'])) {
            $model->checkMethods = $map['checkMethods'];
        }

        if (isset($map['dataTypeClassify'])) {
            $model->dataTypeClassify = $map['dataTypeClassify'];
        }

        if (isset($map['dataTypeGroup'])) {
            $model->dataTypeGroup = $map['dataTypeGroup'];
        }

        if (isset($map['dataTypeList'])) {
            if (!empty($map['dataTypeList'])) {
                $model->dataTypeList = [];
                $n1 = 0;
                foreach ($map['dataTypeList'] as $item1) {
                    $model->dataTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['dataTypes'])) {
            $model->dataTypes = $map['dataTypes'];
        }

        if (isset($map['diffTolerateType'])) {
            $model->diffTolerateType = $map['diffTolerateType'];
        }

        if (isset($map['diffTolerateValues'])) {
            if (!empty($map['diffTolerateValues'])) {
                $model->diffTolerateValues = [];
                foreach ($map['diffTolerateValues'] as $key1 => $value1) {
                    $model->diffTolerateValues[$key1] = $value1;
                }
            }
        }

        if (isset($map['enableDecimalScale'])) {
            $model->enableDecimalScale = $map['enableDecimalScale'];
        }

        if (isset($map['filterColumnName'])) {
            $model->filterColumnName = $map['filterColumnName'];
        }

        if (isset($map['ignoreDecimalScaleSuffixZero'])) {
            $model->ignoreDecimalScaleSuffixZero = $map['ignoreDecimalScaleSuffixZero'];
        }

        if (isset($map['ignoreNumericZero'])) {
            $model->ignoreNumericZero = $map['ignoreNumericZero'];
        }

        if (isset($map['ignoreStringEmpty'])) {
            $model->ignoreStringEmpty = $map['ignoreStringEmpty'];
        }

        if (isset($map['isCountCheck'])) {
            $model->isCountCheck = $map['isCountCheck'];
        }

        if (isset($map['ruleId'])) {
            $model->ruleId = $map['ruleId'];
        }

        if (isset($map['setDecimalScale'])) {
            $model->setDecimalScale = $map['setDecimalScale'];
        }

        return $model;
    }
}
