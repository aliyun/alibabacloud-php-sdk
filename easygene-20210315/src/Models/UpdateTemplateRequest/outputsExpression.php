<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateTemplateRequest;

use AlibabaCloud\Tea\Model;

class outputsExpression extends Model
{
    /**
     * @var string
     */
    public $help;

    /**
     * @description This parameter is required.
     *
     * @example True
     *
     * @var bool
     */
    public $required;

    /**
     * @var int
     */
    public $stepOrder;

    /**
     * @description This parameter is required.
     *
     * @example Task1
     *
     * @var string
     */
    public $taskName;

    /**
     * @description This parameter is required.
     *
     * @example Bam
     *
     * @var string
     */
    public $variableName;

    /**
     * @description This parameter is required.
     *
     * @example String
     *
     * @var string
     */
    public $variableType;

    /**
     * @description This parameter is required.
     *
     * @example out.bam
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
     * @return outputsExpression
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
