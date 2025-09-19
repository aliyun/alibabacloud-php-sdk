<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateSoarStrategyTaskRequest extends Model
{
    /**
     * @var int
     */
    public $strategyId;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var string
     */
    public $strategyTaskName;

    /**
     * @var string
     */
    public $strategyTaskParams;

    /**
     * @var int
     */
    public $strategyTaskPlanExeTime;
    protected $_name = [
        'strategyId' => 'StrategyId',
        'strategyName' => 'StrategyName',
        'strategyTaskName' => 'StrategyTaskName',
        'strategyTaskParams' => 'StrategyTaskParams',
        'strategyTaskPlanExeTime' => 'StrategyTaskPlanExeTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        if (null !== $this->strategyTaskName) {
            $res['StrategyTaskName'] = $this->strategyTaskName;
        }

        if (null !== $this->strategyTaskParams) {
            $res['StrategyTaskParams'] = $this->strategyTaskParams;
        }

        if (null !== $this->strategyTaskPlanExeTime) {
            $res['StrategyTaskPlanExeTime'] = $this->strategyTaskPlanExeTime;
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
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        if (isset($map['StrategyTaskName'])) {
            $model->strategyTaskName = $map['StrategyTaskName'];
        }

        if (isset($map['StrategyTaskParams'])) {
            $model->strategyTaskParams = $map['StrategyTaskParams'];
        }

        if (isset($map['StrategyTaskPlanExeTime'])) {
            $model->strategyTaskPlanExeTime = $map['StrategyTaskPlanExeTime'];
        }

        return $model;
    }
}
