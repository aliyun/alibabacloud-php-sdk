<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetTaskResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetTaskResponseBody\data\pageTaskInfo\dataSets;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetTaskResponseBody\data\pageTaskInfo\ruleNameInfoList;
use AlibabaCloud\Tea\Model;

class pageTaskInfo extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $isTaskComplete;

    /**
     * @var ruleNameInfoList
     */
    public $ruleNameInfoList;

    /**
     * @var float
     */
    public $scheduleRatio;

    /**
     * @var bool
     */
    public $taskComplete;

    /**
     * @var dataSets
     */
    public $dataSets;

    /**
     * @var int
     */
    public $dataSetSize;

    /**
     * @var int
     */
    public $ruleSize;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'status'           => 'Status',
        'isTaskComplete'   => 'IsTaskComplete',
        'ruleNameInfoList' => 'RuleNameInfoList',
        'scheduleRatio'    => 'ScheduleRatio',
        'taskComplete'     => 'TaskComplete',
        'dataSets'         => 'DataSets',
        'dataSetSize'      => 'DataSetSize',
        'ruleSize'         => 'RuleSize',
        'jobName'          => 'JobName',
        'taskId'           => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->isTaskComplete) {
            $res['IsTaskComplete'] = $this->isTaskComplete;
        }
        if (null !== $this->ruleNameInfoList) {
            $res['RuleNameInfoList'] = null !== $this->ruleNameInfoList ? $this->ruleNameInfoList->toMap() : null;
        }
        if (null !== $this->scheduleRatio) {
            $res['ScheduleRatio'] = $this->scheduleRatio;
        }
        if (null !== $this->taskComplete) {
            $res['TaskComplete'] = $this->taskComplete;
        }
        if (null !== $this->dataSets) {
            $res['DataSets'] = null !== $this->dataSets ? $this->dataSets->toMap() : null;
        }
        if (null !== $this->dataSetSize) {
            $res['DataSetSize'] = $this->dataSetSize;
        }
        if (null !== $this->ruleSize) {
            $res['RuleSize'] = $this->ruleSize;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageTaskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IsTaskComplete'])) {
            $model->isTaskComplete = $map['IsTaskComplete'];
        }
        if (isset($map['RuleNameInfoList'])) {
            $model->ruleNameInfoList = ruleNameInfoList::fromMap($map['RuleNameInfoList']);
        }
        if (isset($map['ScheduleRatio'])) {
            $model->scheduleRatio = $map['ScheduleRatio'];
        }
        if (isset($map['TaskComplete'])) {
            $model->taskComplete = $map['TaskComplete'];
        }
        if (isset($map['DataSets'])) {
            $model->dataSets = dataSets::fromMap($map['DataSets']);
        }
        if (isset($map['DataSetSize'])) {
            $model->dataSetSize = $map['DataSetSize'];
        }
        if (isset($map['RuleSize'])) {
            $model->ruleSize = $map['RuleSize'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
