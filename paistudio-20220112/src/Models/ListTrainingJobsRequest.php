<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ListTrainingJobsRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmName;

    /**
     * @var string
     */
    public $algorithmProvider;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $isTempAlgo;

    /**
     * @var mixed[]
     */
    public $labels;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $trainingJobId;

    /**
     * @var string
     */
    public $trainingJobName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'algorithmName' => 'AlgorithmName',
        'algorithmProvider' => 'AlgorithmProvider',
        'endTime' => 'EndTime',
        'isTempAlgo' => 'IsTempAlgo',
        'labels' => 'Labels',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'trainingJobId' => 'TrainingJobId',
        'trainingJobName' => 'TrainingJobName',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['Labels'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['Labels'])) {
                $model->labels = [];
                foreach ($map['Labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
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
