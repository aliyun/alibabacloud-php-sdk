<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ProcessSoarStrategyTaskRequest extends Model
{
    /**
     * @description ID of the strategy task.
     * > You can obtain this parameter by calling the [DescribeSoarStrategyTasks](~~DescribeSoarStrategyTasks~~) interface.
     *
     * This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $strategyTaskId;

    /**
     * @description Task action status. Values:
     * - SCHEDULE: Schedule
     * - PAUSE: Pause
     *
     * This parameter is required.
     *
     * @example SCHEDULE
     *
     * @var string
     */
    public $taskAction;
    protected $_name = [
        'strategyTaskId' => 'StrategyTaskId',
        'taskAction' => 'TaskAction',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->strategyTaskId) {
            $res['StrategyTaskId'] = $this->strategyTaskId;
        }
        if (null !== $this->taskAction) {
            $res['TaskAction'] = $this->taskAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProcessSoarStrategyTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StrategyTaskId'])) {
            $model->strategyTaskId = $map['StrategyTaskId'];
        }
        if (isset($map['TaskAction'])) {
            $model->taskAction = $map['TaskAction'];
        }

        return $model;
    }
}
