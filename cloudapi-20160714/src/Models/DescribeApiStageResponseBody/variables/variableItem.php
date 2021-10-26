<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponseBody\variables;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiStageResponseBody\variables\variableItem\stageRouteModel;
use AlibabaCloud\Tea\Model;

class variableItem extends Model
{
    /**
     * @var string
     */
    public $variableValue;

    /**
     * @var string
     */
    public $variableName;

    /**
     * @var bool
     */
    public $supportRoute;

    /**
     * @var stageRouteModel
     */
    public $stageRouteModel;
    protected $_name = [
        'variableValue'   => 'VariableValue',
        'variableName'    => 'VariableName',
        'supportRoute'    => 'SupportRoute',
        'stageRouteModel' => 'StageRouteModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->variableValue) {
            $res['VariableValue'] = $this->variableValue;
        }
        if (null !== $this->variableName) {
            $res['VariableName'] = $this->variableName;
        }
        if (null !== $this->supportRoute) {
            $res['SupportRoute'] = $this->supportRoute;
        }
        if (null !== $this->stageRouteModel) {
            $res['StageRouteModel'] = null !== $this->stageRouteModel ? $this->stageRouteModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variableItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VariableValue'])) {
            $model->variableValue = $map['VariableValue'];
        }
        if (isset($map['VariableName'])) {
            $model->variableName = $map['VariableName'];
        }
        if (isset($map['SupportRoute'])) {
            $model->supportRoute = $map['SupportRoute'];
        }
        if (isset($map['StageRouteModel'])) {
            $model->stageRouteModel = stageRouteModel::fromMap($map['StageRouteModel']);
        }

        return $model;
    }
}
