<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTasksResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTasksResponseBody\data\list_\filters;

class list_ extends Model
{
    /**
     * @var int
     */
    public $analysisTaskFinishTime;

    /**
     * @var string
     */
    public $analysisTaskStatus;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $end;

    /**
     * @var bool
     */
    public $expire;

    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @var string
     */
    public $innerResult;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $logCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $result;

    /**
     * @var int
     */
    public $scanFileSize;

    /**
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'analysisTaskFinishTime' => 'AnalysisTaskFinishTime',
        'analysisTaskStatus' => 'AnalysisTaskStatus',
        'createTime' => 'CreateTime',
        'end' => 'End',
        'expire' => 'Expire',
        'filters' => 'Filters',
        'innerResult' => 'InnerResult',
        'instanceId' => 'InstanceId',
        'logCount' => 'LogCount',
        'name' => 'Name',
        'progress' => 'Progress',
        'result' => 'Result',
        'scanFileSize' => 'ScanFileSize',
        'start' => 'Start',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisTaskFinishTime) {
            $res['AnalysisTaskFinishTime'] = $this->analysisTaskFinishTime;
        }

        if (null !== $this->analysisTaskStatus) {
            $res['AnalysisTaskStatus'] = $this->analysisTaskStatus;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1 = 0;
                foreach ($this->filters as $item1) {
                    $res['Filters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->innerResult) {
            $res['InnerResult'] = $this->innerResult;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logCount) {
            $res['LogCount'] = $this->logCount;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->scanFileSize) {
            $res['ScanFileSize'] = $this->scanFileSize;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['AnalysisTaskFinishTime'])) {
            $model->analysisTaskFinishTime = $map['AnalysisTaskFinishTime'];
        }

        if (isset($map['AnalysisTaskStatus'])) {
            $model->analysisTaskStatus = $map['AnalysisTaskStatus'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n1 = 0;
                foreach ($map['Filters'] as $item1) {
                    $model->filters[$n1++] = filters::fromMap($item1);
                }
            }
        }

        if (isset($map['InnerResult'])) {
            $model->innerResult = $map['InnerResult'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LogCount'])) {
            $model->logCount = $map['LogCount'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['ScanFileSize'])) {
            $model->scanFileSize = $map['ScanFileSize'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
