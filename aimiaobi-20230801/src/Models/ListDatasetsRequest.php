<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetsRequest extends Model
{
    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $datasetType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $includeConfig;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var int
     */
    public $searchDatasetEnable;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'datasetName' => 'DatasetName',
        'datasetType' => 'DatasetType',
        'endTime' => 'EndTime',
        'includeConfig' => 'IncludeConfig',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'searchDatasetEnable' => 'SearchDatasetEnable',
        'startTime' => 'StartTime',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->includeConfig) {
            $res['IncludeConfig'] = $this->includeConfig;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->searchDatasetEnable) {
            $res['SearchDatasetEnable'] = $this->searchDatasetEnable;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IncludeConfig'])) {
            $model->includeConfig = $map['IncludeConfig'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SearchDatasetEnable'])) {
            $model->searchDatasetEnable = $map['SearchDatasetEnable'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
