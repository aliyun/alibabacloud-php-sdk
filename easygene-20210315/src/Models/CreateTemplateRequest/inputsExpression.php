<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateTemplateRequest;

use AlibabaCloud\Tea\Model;

class inputsExpression extends Model
{
    /**
     * @example test help
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
     * @example 0
     *
     * @var int
     */
    public $stepOrder;

    /**
     * @example Task1
     *
     * @var string
     */
    public $taskName;

    /**
     * @example fastq1
     *
     * @var string
     */
    public $variableName;

    /**
     * @example File
     *
     * @var string
     */
    public $variableType;

    /**
     * @example oss://bucket/file1.fastq
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
     * @return inputsExpression
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
