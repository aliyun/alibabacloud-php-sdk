<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigIndexResponseBody\configGroups\configGroup\configPaths\configPath\configOptions;

use AlibabaCloud\Tea\Model;

class configOption extends Model
{
    /**
     * @var string
     */
    public $regexDesc;

    /**
     * @var int
     */
    public $maxValue;

    /**
     * @var string
     */
    public $editorType;

    /**
     * @var int
     */
    public $minValue;

    /**
     * @var string
     */
    public $optionLabel;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var string
     */
    public $regexPattern;

    /**
     * @var string
     */
    public $changeSeverity;

    /**
     * @var string
     */
    public $optionDescription;

    /**
     * @var string
     */
    public $optionName;

    /**
     * @var string
     */
    public $pathName;

    /**
     * @var bool
     */
    public $hiddenOption;

    /**
     * @var string
     */
    public $valueType;

    /**
     * @var int
     */
    public $minLength;

    /**
     * @var string
     */
    public $valueOptions;

    /**
     * @var bool
     */
    public $readonlyOption;
    protected $_name = [
        'regexDesc'         => 'RegexDesc',
        'maxValue'          => 'MaxValue',
        'editorType'        => 'EditorType',
        'minValue'          => 'MinValue',
        'optionLabel'       => 'OptionLabel',
        'defaultValue'      => 'DefaultValue',
        'maxLength'         => 'MaxLength',
        'regexPattern'      => 'RegexPattern',
        'changeSeverity'    => 'ChangeSeverity',
        'optionDescription' => 'OptionDescription',
        'optionName'        => 'OptionName',
        'pathName'          => 'PathName',
        'hiddenOption'      => 'HiddenOption',
        'valueType'         => 'ValueType',
        'minLength'         => 'MinLength',
        'valueOptions'      => 'ValueOptions',
        'readonlyOption'    => 'ReadonlyOption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regexDesc) {
            $res['RegexDesc'] = $this->regexDesc;
        }
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }
        if (null !== $this->editorType) {
            $res['EditorType'] = $this->editorType;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->optionLabel) {
            $res['OptionLabel'] = $this->optionLabel;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }
        if (null !== $this->regexPattern) {
            $res['RegexPattern'] = $this->regexPattern;
        }
        if (null !== $this->changeSeverity) {
            $res['ChangeSeverity'] = $this->changeSeverity;
        }
        if (null !== $this->optionDescription) {
            $res['OptionDescription'] = $this->optionDescription;
        }
        if (null !== $this->optionName) {
            $res['OptionName'] = $this->optionName;
        }
        if (null !== $this->pathName) {
            $res['PathName'] = $this->pathName;
        }
        if (null !== $this->hiddenOption) {
            $res['HiddenOption'] = $this->hiddenOption;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }
        if (null !== $this->minLength) {
            $res['MinLength'] = $this->minLength;
        }
        if (null !== $this->valueOptions) {
            $res['ValueOptions'] = $this->valueOptions;
        }
        if (null !== $this->readonlyOption) {
            $res['ReadonlyOption'] = $this->readonlyOption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegexDesc'])) {
            $model->regexDesc = $map['RegexDesc'];
        }
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }
        if (isset($map['EditorType'])) {
            $model->editorType = $map['EditorType'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['OptionLabel'])) {
            $model->optionLabel = $map['OptionLabel'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }
        if (isset($map['RegexPattern'])) {
            $model->regexPattern = $map['RegexPattern'];
        }
        if (isset($map['ChangeSeverity'])) {
            $model->changeSeverity = $map['ChangeSeverity'];
        }
        if (isset($map['OptionDescription'])) {
            $model->optionDescription = $map['OptionDescription'];
        }
        if (isset($map['OptionName'])) {
            $model->optionName = $map['OptionName'];
        }
        if (isset($map['PathName'])) {
            $model->pathName = $map['PathName'];
        }
        if (isset($map['HiddenOption'])) {
            $model->hiddenOption = $map['HiddenOption'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }
        if (isset($map['MinLength'])) {
            $model->minLength = $map['MinLength'];
        }
        if (isset($map['ValueOptions'])) {
            $model->valueOptions = $map['ValueOptions'];
        }
        if (isset($map['ReadonlyOption'])) {
            $model->readonlyOption = $map['ReadonlyOption'];
        }

        return $model;
    }
}
