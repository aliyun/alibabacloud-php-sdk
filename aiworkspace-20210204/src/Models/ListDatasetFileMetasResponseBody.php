<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetFileMetasResponseBody extends Model
{
    /**
     * @var DatasetFileMeta[]
     */
    public $datasetFileMetas;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var string
     */
    public $datasetVersion;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetFileMetas' => 'DatasetFileMetas',
        'datasetId' => 'DatasetId',
        'datasetVersion' => 'DatasetVersion',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->datasetFileMetas)) {
            Model::validateArray($this->datasetFileMetas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetFileMetas) {
            if (\is_array($this->datasetFileMetas)) {
                $res['DatasetFileMetas'] = [];
                $n1 = 0;
                foreach ($this->datasetFileMetas as $item1) {
                    $res['DatasetFileMetas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetVersion) {
            $res['DatasetVersion'] = $this->datasetVersion;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DatasetFileMetas'])) {
            if (!empty($map['DatasetFileMetas'])) {
                $model->datasetFileMetas = [];
                $n1 = 0;
                foreach ($map['DatasetFileMetas'] as $item1) {
                    $model->datasetFileMetas[$n1] = DatasetFileMeta::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetVersion'])) {
            $model->datasetVersion = $map['DatasetVersion'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
