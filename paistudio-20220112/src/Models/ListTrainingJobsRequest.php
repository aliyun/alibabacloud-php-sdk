<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ListTrainingJobsRequest extends Model
{
    /**
     * @example llm_train
     *
     * @var string
     */
    public $algorithmName;

    /**
     * @example pai
     *
     * @var string
     */
    public $algorithmProvider;

    /**
     * @example 2023-12-27T02:10:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $isTempAlgo;

    /**
     * @example {"project": "sd-s3"}
     *
     * @var mixed[]
     */
    public $labels;

    /**
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example GmtModifiedTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example 2024-06-22T01:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example trains930928remn
     *
     * @var string
     */
    public $trainingJobId;

    /**
     * @example large_language_model_training
     *
     * @var string
     */
    public $trainingJobName;

    /**
     * @example 12345
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'algorithmName'     => 'AlgorithmName',
        'algorithmProvider' => 'AlgorithmProvider',
        'endTime'           => 'EndTime',
        'isTempAlgo'        => 'IsTempAlgo',
        'labels'            => 'Labels',
        'order'             => 'Order',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'sortBy'            => 'SortBy',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
        'trainingJobId'     => 'TrainingJobId',
        'trainingJobName'   => 'TrainingJobName',
        'workspaceId'       => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmName) {
            $res['AlgorithmName'] = $this->algorithmName;
        }
        if (null !== $this->algorithmProvider) {
            $res['AlgorithmProvider'] = $this->algorithmProvider;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isTempAlgo) {
            $res['IsTempAlgo'] = $this->isTempAlgo;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trainingJobId) {
            $res['TrainingJobId'] = $this->trainingJobId;
        }
        if (null !== $this->trainingJobName) {
            $res['TrainingJobName'] = $this->trainingJobName;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrainingJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmName'])) {
            $model->algorithmName = $map['AlgorithmName'];
        }
        if (isset($map['AlgorithmProvider'])) {
            $model->algorithmProvider = $map['AlgorithmProvider'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsTempAlgo'])) {
            $model->isTempAlgo = $map['IsTempAlgo'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrainingJobId'])) {
            $model->trainingJobId = $map['TrainingJobId'];
        }
        if (isset($map['TrainingJobName'])) {
            $model->trainingJobName = $map['TrainingJobName'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
