<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterDatasetsResponseBody\datasets;

class DescribeAIDBClusterDatasetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $continuationToken;

    /**
     * @var string
     */
    public $dataServiceId;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetMode;

    /**
     * @var string
     */
    public $datasetType;

    /**
     * @var datasets[]
     */
    public $datasets;

    /**
     * @var string
     */
    public $fileCount;

    /**
     * @var bool
     */
    public $isTruncated;

    /**
     * @var string
     */
    public $nextContinuationToken;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $relativeDBClusterId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var string
     */
    public $totalRecords;
    protected $_name = [
        'continuationToken' => 'ContinuationToken',
        'dataServiceId' => 'DataServiceId',
        'datasetId' => 'DatasetId',
        'datasetMode' => 'DatasetMode',
        'datasetType' => 'DatasetType',
        'datasets' => 'Datasets',
        'fileCount' => 'FileCount',
        'isTruncated' => 'IsTruncated',
        'nextContinuationToken' => 'NextContinuationToken',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'relativeDBClusterId' => 'RelativeDBClusterId',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'totalRecords' => 'TotalRecords',
    ];

    public function validate()
    {
        if (\is_array($this->datasets)) {
            Model::validateArray($this->datasets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->continuationToken) {
            $res['ContinuationToken'] = $this->continuationToken;
        }

        if (null !== $this->dataServiceId) {
            $res['DataServiceId'] = $this->dataServiceId;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetMode) {
            $res['DatasetMode'] = $this->datasetMode;
        }

        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }

        if (null !== $this->datasets) {
            if (\is_array($this->datasets)) {
                $res['Datasets'] = [];
                $n1 = 0;
                foreach ($this->datasets as $item1) {
                    $res['Datasets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileCount) {
            $res['FileCount'] = $this->fileCount;
        }

        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }

        if (null !== $this->nextContinuationToken) {
            $res['NextContinuationToken'] = $this->nextContinuationToken;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->relativeDBClusterId) {
            $res['RelativeDBClusterId'] = $this->relativeDBClusterId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->totalRecords) {
            $res['TotalRecords'] = $this->totalRecords;
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
        if (isset($map['ContinuationToken'])) {
            $model->continuationToken = $map['ContinuationToken'];
        }

        if (isset($map['DataServiceId'])) {
            $model->dataServiceId = $map['DataServiceId'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetMode'])) {
            $model->datasetMode = $map['DatasetMode'];
        }

        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }

        if (isset($map['Datasets'])) {
            if (!empty($map['Datasets'])) {
                $model->datasets = [];
                $n1 = 0;
                foreach ($map['Datasets'] as $item1) {
                    $model->datasets[$n1] = datasets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FileCount'])) {
            $model->fileCount = $map['FileCount'];
        }

        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }

        if (isset($map['NextContinuationToken'])) {
            $model->nextContinuationToken = $map['NextContinuationToken'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RelativeDBClusterId'])) {
            $model->relativeDBClusterId = $map['RelativeDBClusterId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TotalRecords'])) {
            $model->totalRecords = $map['TotalRecords'];
        }

        return $model;
    }
}
