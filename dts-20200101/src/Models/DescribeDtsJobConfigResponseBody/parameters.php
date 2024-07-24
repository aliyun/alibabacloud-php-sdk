<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobConfigResponseBody;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @var string
     */
    public $checkingCode;

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
    public $forceRestart;

    /**
     * @var string
     */
    public $modifiable;

    /**
     * @var string
     */
    public $module;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $recommendValue;

    /**
     * @var string
     */
    public $runningValue;

    /**
     * @var int
     */
    public $valueType;
    protected $_name = [
        'checkingCode'   => 'CheckingCode',
        'defaultValue'   => 'DefaultValue',
        'description'    => 'Description',
        'forceRestart'   => 'ForceRestart',
        'modifiable'     => 'Modifiable',
        'module'         => 'Module',
        'name'           => 'Name',
        'recommendValue' => 'RecommendValue',
        'runningValue'   => 'RunningValue',
        'valueType'      => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkingCode) {
            $res['CheckingCode'] = $this->checkingCode;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->forceRestart) {
            $res['ForceRestart'] = $this->forceRestart;
        }
        if (null !== $this->modifiable) {
            $res['Modifiable'] = $this->modifiable;
        }
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recommendValue) {
            $res['RecommendValue'] = $this->recommendValue;
        }
        if (null !== $this->runningValue) {
            $res['RunningValue'] = $this->runningValue;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckingCode'])) {
            $model->checkingCode = $map['CheckingCode'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ForceRestart'])) {
            $model->forceRestart = $map['ForceRestart'];
        }
        if (isset($map['Modifiable'])) {
            $model->modifiable = $map['Modifiable'];
        }
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecommendValue'])) {
            $model->recommendValue = $map['RecommendValue'];
        }
        if (isset($map['RunningValue'])) {
            $model->runningValue = $map['RunningValue'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
