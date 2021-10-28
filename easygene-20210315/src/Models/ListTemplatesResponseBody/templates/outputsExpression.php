<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListTemplatesResponseBody\templates;

use AlibabaCloud\Tea\Model;

class outputsExpression extends Model
{
    /**
     * @description 帮助信息
     *
     * @var string
     */
    public $help;

    /**
     * @description 是否必须参数
     *
     * @var bool
     */
    public $required;

    /**
     * @description 步骤顺序
     *
     * @var int
     */
    public $stepOrder;

    /**
     * @description 任务名称
     *
     * @var string
     */
    public $taskName;

    /**
     * @description 变量名称
     *
     * @var string
     */
    public $variableName;

    /**
     * @description 变量类型
     *
     * @var string
     */
    public $variableType;

    /**
     * @description 变量值
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
