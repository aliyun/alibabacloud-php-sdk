<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody\repairSetting;

use AlibabaCloud\Tea\Model;

class repairConfigs extends Model
{
    /**
     * @var string
     */
    public $consoleParamType;

    /**
     * @var bool
     */
    public $customFlag;

    /**
     * @var string
     */
    public $dataTransformType;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $emptyParamSwitch;

    /**
     * @var string[]
     */
    public $exclusiveName;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $showName;

    /**
     * @var string
     */
    public $typeDefine;

    /**
     * @var string
     */
    public $usageType;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'consoleParamType'  => 'ConsoleParamType',
        'customFlag'        => 'CustomFlag',
        'dataTransformType' => 'DataTransformType',
        'defaultValue'      => 'DefaultValue',
        'emptyParamSwitch'  => 'EmptyParamSwitch',
        'exclusiveName'     => 'ExclusiveName',
        'flowId'            => 'FlowId',
        'name'              => 'Name',
        'showName'          => 'ShowName',
        'typeDefine'        => 'TypeDefine',
        'usageType'         => 'UsageType',
        'value'             => 'Value',
    ];

    public function validate()
    {
    }

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
