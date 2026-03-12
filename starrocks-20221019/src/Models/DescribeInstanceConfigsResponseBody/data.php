<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeInstanceConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $allowModify;

    /**
     * @var string
     */
    public $configKey;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $configValue;

    /**
     * @var bool
     */
    public $custom;

    /**
     * @var bool
     */
    public $defaultNodeGroup;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $descriptionEn;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $nodeGroupName;

    /**
     * @var bool
     */
    public $restart;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $valueRange;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'allowModify' => 'AllowModify',
        'configKey' => 'ConfigKey',
        'configType' => 'ConfigType',
        'configValue' => 'ConfigValue',
        'custom' => 'Custom',
        'defaultNodeGroup' => 'DefaultNodeGroup',
        'defaultValue' => 'DefaultValue',
        'description' => 'Description',
        'descriptionEn' => 'DescriptionEn',
        'nodeGroupId' => 'NodeGroupId',
        'nodeGroupName' => 'NodeGroupName',
        'restart' => 'Restart',
        'unit' => 'Unit',
        'valueRange' => 'ValueRange',
        'valueType' => 'ValueType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowModify) {
            $res['AllowModify'] = $this->allowModify;
        }

        if (null !== $this->configKey) {
            $res['ConfigKey'] = $this->configKey;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }

        if (null !== $this->custom) {
            $res['Custom'] = $this->custom;
        }

        if (null !== $this->defaultNodeGroup) {
            $res['DefaultNodeGroup'] = $this->defaultNodeGroup;
        }

        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->descriptionEn) {
            $res['DescriptionEn'] = $this->descriptionEn;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }

        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
        }

        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        if (null !== $this->valueRange) {
            $res['ValueRange'] = $this->valueRange;
        }

        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
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
        if (isset($map['AllowModify'])) {
            $model->allowModify = $map['AllowModify'];
        }

        if (isset($map['ConfigKey'])) {
            $model->configKey = $map['ConfigKey'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }

        if (isset($map['Custom'])) {
            $model->custom = $map['Custom'];
        }

        if (isset($map['DefaultNodeGroup'])) {
            $model->defaultNodeGroup = $map['DefaultNodeGroup'];
        }

        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DescriptionEn'])) {
            $model->descriptionEn = $map['DescriptionEn'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }

        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        if (isset($map['ValueRange'])) {
            $model->valueRange = $map['ValueRange'];
        }

        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
