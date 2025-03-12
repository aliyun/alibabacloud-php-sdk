<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageLatestScanTaskResponseBody;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description The time when the task was created. The time is in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2022-12-20 11:59:05
     *
     * @var string
     */
    public $create;

    /**
     * @description The number of images that are scanned.
     *
     * @example 100
     *
     * @var int
     */
    public $finish;

    /**
     * @description The end time of the task. A value is returned only when the task is in the Finished state. Otherwise, the returned value is empty.
     *
     * @example 1669693430977
     *
     * @var int
     */
    public $finishTime;

    /**
     * @description The task ID.
     *
     * @example 9755662
     *
     * @var int
     */
    public $id;

    /**
     * @description The time when the task was last modified. The time is in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2022-12-20 12:00:05
     *
     * @var string
     */
    public $modified;

    /**
     * @description The name of the task.
     *
     * @example IMAGE_SCAN
     *
     * @var string
     */
    public $name;

    /**
     * @description The method in which the task was created. A task can be created in the Security Center console or by calling an API operation. Valid values:
     *
     *   **console_batch**: The task was created in the Security Center console.
     *   **openapi**: The task was created by calling an API operation.
     *
     * @example console_batch
     *
     * @var string
     */
    public $source;

    /**
     * @description The start time of the task.
     *
     * @example 1668614400000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the task. Valid value:
     *
     *   **PROCESSING**: The task is running.
     *   **START**: The task is being started.
     *   **MESSAGE_SEND**: The scan task is sent.
     *   **PRE_ANALYZER**: The image is in precheck.
     *   **SUCCESS**: The task was successful.
     *   **FAIL**: The task failed.
     *   **TIMOUT**: The task timed out.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The digest value of the image.
     *
     * @example 8f0fbdb41d3d1ade4ffdf21558443f4c03342010563bb8c43ccc09594d50****
     *
     * @var string
     */
    public $target;

    /**
     * @description The type of the scanned asset. Valid value:
     *
     *   **IMAGE**
     *
     * @example IMAGE
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The ID of the scan task.
     *
     * @example 0a960b9a48b788a8689154b032bf****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of the task. Valid value:
     *
     *   **IMAGE_SCAN**
     *
     * @example IMAGE_SCAN
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'create'     => 'Create',
        'finish'     => 'Finish',
        'finishTime' => 'FinishTime',
        'id'         => 'Id',
        'modified'   => 'Modified',
        'name'       => 'Name',
        'source'     => 'Source',
        'startTime'  => 'StartTime',
        'status'     => 'Status',
        'target'     => 'Target',
        'targetType' => 'TargetType',
        'taskId'     => 'TaskId',
        'taskType'   => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->create) {
            $res['Create'] = $this->create;
        }
        if (null !== $this->finish) {
            $res['Finish'] = $this->finish;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modified) {
            $res['Modified'] = $this->modified;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Create'])) {
            $model->create = $map['Create'];
        }
        if (isset($map['Finish'])) {
            $model->finish = $map['Finish'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Modified'])) {
            $model->modified = $map['Modified'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
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
