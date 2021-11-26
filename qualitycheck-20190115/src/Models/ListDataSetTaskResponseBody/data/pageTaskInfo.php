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
    public $dataSetSize;

    /**
     * @var dataSets
     */
    public $dataSets;

    /**
     * @var bool
     */
    public $isTaskComplete;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var ruleNameInfoList
     */
    public $ruleNameInfoList;

    /**
     * @var int
     */
    public $ruleSize;

    /**
     * @var float
     */
    public $scheduleRatio;

    /**
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $taskComplete;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'dataSetSize'      => 'DataSetSize',
        'dataSets'         => 'DataSets',
        'isTaskComplete'   => 'IsTaskComplete',
        'jobName'          => 'JobName',
        'ruleNameInfoList' => 'RuleNameInfoList',
        'ruleSize'         => 'RuleSize',
        'scheduleRatio'    => 'ScheduleRatio',
        'status'           => 'Status',
        'taskComplete'     => 'TaskComplete',
        'taskId'           => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSetSize) {
            $res['DataSetSize'] = $this->dataSetSize;
        }
        if (null !== $this->dataSets) {
            $res['DataSets'] = null !== $this->dataSets ? $this->dataSets->toMap() : null;
        }
        if (null !== $this->isTaskComplete) {
            $res['IsTaskComplete'] = $this->isTaskComplete;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->ruleNameInfoList) {
            $res['RuleNameInfoList'] = null !== $this->ruleNameInfoList ? $this->ruleNameInfoList->toMap() : null;
        }
        if (null !== $this->ruleSize) {
            $res['RuleSize'] = $this->ruleSize;
        }
        if (null !== $this->scheduleRatio) {
            $res['ScheduleRatio'] = $this->scheduleRatio;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskComplete) {
            $res['TaskComplete'] = $this->taskComplete;
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
        if (isset($map['DataSetSize'])) {
            $model->dataSetSize = $map['DataSetSize'];
        }
        if (isset($map['DataSets'])) {
            $model->dataSets = dataSets::fromMap($map['DataSets']);
        }
        if (isset($map['IsTaskComplete'])) {
            $model->isTaskComplete = $map['IsTaskComplete'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['RuleNameInfoList'])) {
            $model->ruleNameInfoList = ruleNameInfoList::fromMap($map['RuleNameInfoList']);
        }
        if (isset($map['RuleSize'])) {
            $model->ruleSize = $map['RuleSize'];
        }
        if (isset($map['ScheduleRatio'])) {
            $model->scheduleRatio = $map['ScheduleRatio'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskComplete'])) {
            $model->taskComplete = $map['TaskComplete'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
