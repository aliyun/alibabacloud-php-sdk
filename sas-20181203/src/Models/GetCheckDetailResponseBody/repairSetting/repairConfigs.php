<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\repairSetting;

use AlibabaCloud\Tea\Model;

class repairConfigs extends Model
{
    /**
     * @description Indicates whether the value of the parameter is displayed in the console. Valid values:
     *
     *   0: The historical value and real-time value of the parameter are displayed.
     *   1: Only the real-time value of the parameter is displayed.
     *   2: The value of the parameter is not displayed in the console.
     *
     * @example 0
     *
     * @var string
     */
    public $consoleParamType;

    /**
     * @description Indicates whether custom configurations of the fixing parameters are supported. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $customFlag;

    /**
     * @description Indicates whether data needs to be encrypted during transmission. Valid values:
     *
     *   0: Data does not need to be encrypted during transmission.
     *   1: Data needs to be encrypted during transmission.
     *   2: Data needs to be encrypted during transmission, and the user must perform secondary confirmation.
     *
     * @example 1
     *
     * @var string
     */
    public $dataTransformType;

    /**
     * @description The default value of the parameter. The value is a string.
     *
     * @example 1
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description Indicates whether this parameter is specified by the user. Valid values:
     *
     *   0: The default value is used.
     *   1: This parameter is required, and no default value is specified.
     *   2: This parameter can be left empty.
     *
     * @example 1
     *
     * @var string
     */
    public $emptyParamSwitch;

    /**
     * @description The fixing parameters that are not compatible with this parameter.
     *
     * @var string[]
     */
    public $exclusiveName;

    /**
     * @description The ID of the fixing workflow.
     *
     * @example 64312d3ee19d470a9b54393dab****
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The name of the parameter. The name must be unique within the check item.
     *
     * @example navicat
     *
     * @var string
     */
    public $name;

    /**
     * @description The display name of the parameter.
     *
     * @example port
     *
     * @var string
     */
    public $showName;

    /**
     * @description The type of the parameter. The value is a JSON string.
     *
     * @example {\\"type\\":\\"NUMBER\\",\\"range\\":[1,24]}
     *
     * @var string
     */
    public $typeDefine;

    /**
     * @description The type of the parameter. Valid values:
     *
     *   1: asset parameters that are required during fixing.
     *   2: user-provided parameters that are required during fixing.
     *   3: parameters that are temporarily provided by the user.
     *
     * @example 1
     *
     * @var string
     */
    public $usageType;

    /**
     * @description The user-configured value of the parameter. The value is a string.
     *
     * @example 2
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'consoleParamType' => 'ConsoleParamType',
        'customFlag' => 'CustomFlag',
        'dataTransformType' => 'DataTransformType',
        'defaultValue' => 'DefaultValue',
        'emptyParamSwitch' => 'EmptyParamSwitch',
        'exclusiveName' => 'ExclusiveName',
        'flowId' => 'FlowId',
        'name' => 'Name',
        'showName' => 'ShowName',
        'typeDefine' => 'TypeDefine',
        'usageType' => 'UsageType',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleParamType) {
            $res['ConsoleParamType'] = $this->consoleParamType;
        }
        if (null !== $this->customFlag) {
            $res['CustomFlag'] = $this->customFlag;
        }
        if (null !== $this->dataTransformType) {
            $res['DataTransformType'] = $this->dataTransformType;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->emptyParamSwitch) {
            $res['EmptyParamSwitch'] = $this->emptyParamSwitch;
        }
        if (null !== $this->exclusiveName) {
            $res['ExclusiveName'] = $this->exclusiveName;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->typeDefine) {
            $res['TypeDefine'] = $this->typeDefine;
        }
        if (null !== $this->usageType) {
            $res['UsageType'] = $this->usageType;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repairConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsoleParamType'])) {
            $model->consoleParamType = $map['ConsoleParamType'];
        }
        if (isset($map['CustomFlag'])) {
            $model->customFlag = $map['CustomFlag'];
        }
        if (isset($map['DataTransformType'])) {
            $model->dataTransformType = $map['DataTransformType'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['EmptyParamSwitch'])) {
            $model->emptyParamSwitch = $map['EmptyParamSwitch'];
        }
        if (isset($map['ExclusiveName'])) {
            if (!empty($map['ExclusiveName'])) {
                $model->exclusiveName = $map['ExclusiveName'];
            }
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['TypeDefine'])) {
            $model->typeDefine = $map['TypeDefine'];
        }
        if (isset($map['UsageType'])) {
            $model->usageType = $map['UsageType'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
