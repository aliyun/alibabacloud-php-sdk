<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\GetAppResponseBody;

use AlibabaCloud\Tea\Model;

class inputs extends Model
{
    /**
     * @example help information
     *
     * @var string
     */
    public $help;

    /**
     * @example true
     *
     * @var bool
     */
    public $required;

    /**
     * @example 1
     *
     * @var int
     */
    public $stepOrder;

    /**
     * @example TestTaskName
     *
     * @var string
     */
    public $taskName;

    /**
     * @example TestVariableName
     *
     * @var string
     */
    public $variableName;

    /**
     * @example TestVariableType
     *
     * @var string
     */
    public $variableType;

    /**
     * @example TestVariableValue
     *
     * @var string
     */
    public $variableValue;
    protected $_name = [
        'help'          => 'Help',
        'required'      => 'Required',
        'stepOrder'     => 'StepOrder',
        'taskName'      => 'TaskName',
        'variableName'  => 'VariableName',
        'variableType'  => 'VariableType',
        'variableValue' => 'VariableValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->help) {
            $res['Help'] = $this->help;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->stepOrder) {
            $res['StepOrder'] = $this->stepOrder;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->variableName) {
            $res['VariableName'] = $this->variableName;
        }
        if (null !== $this->variableType) {
            $res['VariableType'] = $this->variableType;
        }
        if (null !== $this->variableValue) {
            $res['VariableValue'] = $this->variableValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Help'])) {
            $model->help = $map['Help'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['StepOrder'])) {
            $model->stepOrder = $map['StepOrder'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['VariableName'])) {
            $model->variableName = $map['VariableName'];
        }
        if (isset($map['VariableType'])) {
            $model->variableType = $map['VariableType'];
        }
        if (isset($map['VariableValue'])) {
            $model->variableValue = $map['VariableValue'];
        }

        return $model;
    }
}
