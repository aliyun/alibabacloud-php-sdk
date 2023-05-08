<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageLatestScanTaskResponseBody;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @example 2022-12-20 11:59:05
     *
     * @var string
     */
    public $create;

    /**
     * @example 100
     *
     * @var int
     */
    public $finish;

    /**
     * @example 1669693430977
     *
     * @var int
     */
    public $finishTime;

    /**
     * @example 9755662
     *
     * @var int
     */
    public $id;

    /**
     * @example 2022-12-20 12:00:05
     *
     * @var string
     */
    public $modified;

    /**
     * @example IMAGE_SCAN
     *
     * @var string
     */
    public $name;

    /**
     * @example console_batch
     *
     * @var string
     */
    public $source;

    /**
     * @example 1668614400000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example 8f0fbdb41d3d1ade4ffdf21558443f4c03342010563bb8c43ccc09594d50****
     *
     * @var string
     */
    public $target;

    /**
     * @example IMAGE
     *
     * @var string
     */
    public $targetType;

    /**
     * @example 0a960b9a48b788a8689154b032bf****
     *
     * @var string
     */
    public $taskId;

    /**
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
