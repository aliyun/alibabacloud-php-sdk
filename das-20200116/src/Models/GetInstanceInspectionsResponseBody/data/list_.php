<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceInspectionsResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceInspectionsResponseBody\data\list_\autoFunction;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceInspectionsResponseBody\data\list_\instance;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description Indicates whether the autonomy service is enabled.
     *
     * @var autoFunction
     */
    public $autoFunction;

    /**
     * @description The returned data.
     *
     * @example "data": { "hasDeadLock": false, "exceptionTableMap": {}, "bigTransactionCount": 0, "cpu": 4, "isRds": true, "rdsEnable": true, "enable": false, "activeSessions": [], "bigTransactionList": [], "bigSessionList": [ { "blockDuration": 0, "active": false, "Time": 0, "db": "" },
     *
     * @var mixed[]
     */
    public $data;

    /**
     * @description Indicates whether DAS Professional Edition is enabled. Valid values:
     *
     * **0**: disabled.
     * **1**: enabled.
     * **2**: not supported.
     *
     * @example 0
     *
     * @var int
     */
    public $enableDasPro;

    /**
     * @description The end time of the inspection and scoring task. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * > The end time must be later than the start time.
     * @example 1608888296001
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The time when the task was created. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1603247192000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The details of the instance.
     *
     * @var instance
     */
    public $instance;

    /**
     * @description The inspection scores of the instance.
     *
     * @example 100
     *
     * @var int
     */
    public $score;

    /**
     * @description The scores that are deducted for the instance.
     *
     * @var mixed[]
     */
    public $scoreMap;

    /**
     * @description The start time of the inspection and scoring task. The value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1608888296000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The state of the inspection and scoring task. Valid values:
     *
     * **0**: The task is waiting for execution.
     * **1**: The task is in progress.
     * **2**: The task is complete.
     *
     * @example 2
     *
     * @var int
     */
    public $state;

    /**
     * @description The mode in which the inspection and scoring task was initiated. Valid values:
     *
     * **0**: automatic mode
     * **1**: manual mode
     *
     * @example 0
     *
     * @var int
     */
    public $taskType;
    protected $_name = [
        'autoFunction' => 'AutoFunction',
        'data'         => 'Data',
        'enableDasPro' => 'EnableDasPro',
        'endTime'      => 'EndTime',
        'gmtCreate'    => 'GmtCreate',
        'instance'     => 'Instance',
        'score'        => 'Score',
        'scoreMap'     => 'ScoreMap',
        'startTime'    => 'StartTime',
        'state'        => 'State',
        'taskType'     => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoFunction) {
            $res['AutoFunction'] = null !== $this->autoFunction ? $this->autoFunction->toMap() : null;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->enableDasPro) {
            $res['EnableDasPro'] = $this->enableDasPro;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->instance) {
            $res['Instance'] = null !== $this->instance ? $this->instance->toMap() : null;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->scoreMap) {
            $res['ScoreMap'] = $this->scoreMap;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoFunction'])) {
            $model->autoFunction = autoFunction::fromMap($map['AutoFunction']);
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['EnableDasPro'])) {
            $model->enableDasPro = $map['EnableDasPro'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Instance'])) {
            $model->instance = instance::fromMap($map['Instance']);
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ScoreMap'])) {
            $model->scoreMap = $map['ScoreMap'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
