<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAdHocTaskResultResponseBody;

use AlibabaCloud\Tea\Model;

class executeResult extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $result;

    /**
     * @example t_2242892326444990464_20210125_2242892326444990465
     *
     * @var string
     */
    public $scheduleTaskId;

    /**
     * @example MaxCompute_SQL_300000843_1611548758327
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'result' => 'Result',
        'scheduleTaskId' => 'ScheduleTaskId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->scheduleTaskId) {
            $res['ScheduleTaskId'] = $this->scheduleTaskId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executeResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ScheduleTaskId'])) {
            $model->scheduleTaskId = $map['ScheduleTaskId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
