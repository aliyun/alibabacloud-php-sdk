<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIActionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $actionId;

    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $actionTemplateId;

    /**
     * @var int
     */
    public $actionIndex;

    /**
     * @var string
     */
    public $algo;

    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $algoConfig;

    /**
     * @var string
     */
    public $actionConfig;
    protected $_name = [
        'actionId'         => 'ActionId',
        'planId'           => 'PlanId',
        'actionTemplateId' => 'ActionTemplateId',
        'actionIndex'      => 'ActionIndex',
        'algo'             => 'Algo',
        'action'           => 'Action',
        'algoConfig'       => 'AlgoConfig',
        'actionConfig'     => 'ActionConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionId) {
            $res['ActionId'] = $this->actionId;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->actionTemplateId) {
            $res['ActionTemplateId'] = $this->actionTemplateId;
        }
        if (null !== $this->actionIndex) {
            $res['ActionIndex'] = $this->actionIndex;
        }
        if (null !== $this->algo) {
            $res['Algo'] = $this->algo;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->algoConfig) {
            $res['AlgoConfig'] = $this->algoConfig;
        }
        if (null !== $this->actionConfig) {
            $res['ActionConfig'] = $this->actionConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionId'])) {
            $model->actionId = $map['ActionId'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['ActionTemplateId'])) {
            $model->actionTemplateId = $map['ActionTemplateId'];
        }
        if (isset($map['ActionIndex'])) {
            $model->actionIndex = $map['ActionIndex'];
        }
        if (isset($map['Algo'])) {
            $model->algo = $map['Algo'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['AlgoConfig'])) {
            $model->algoConfig = $map['AlgoConfig'];
        }
        if (isset($map['ActionConfig'])) {
            $model->actionConfig = $map['ActionConfig'];
        }

        return $model;
    }
}
