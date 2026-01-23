<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetFileMetasRequest extends Model
{
    /**
     * @var string[]
     */
    public $datasetFileMetaIds;

    /**
     * @var string
     */
    public $datasetVersion;

    /**
     * @var string
     */
    public $endFileUpdateTime;

    /**
     * @var string
     */
    public $endTagUpdateTime;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $queryContentTypeIncludeAny;

    /**
     * @var string
     */
    public $queryExpression;

    /**
     * @var string
     */
    public $queryFileDir;

    /**
     * @var string
     */
    public $queryFileName;

    /**
     * @var string[]
     */
    public $queryFileTypeIncludeAny;

    /**
     * @var string
     */
    public $queryImage;

    /**
     * @var string[]
     */
    public $queryTagsExclude;

    /**
     * @var string[]
     */
    public $queryTagsIncludeAll;

    /**
     * @var string[]
     */
    public $queryTagsIncludeAny;

    /**
     * @var string
     */
    public $queryText;

    /**
     * @var string
     */
    public $queryType;

    /**
     * @var string
     */
    public $queryVideo;

    /**
     * @var float
     */
    public $scoreThreshold;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $startFileUpdateTime;

    /**
     * @var string
     */
    public $startTagUpdateTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $thumbnailMode;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetFileMetaIds' => 'DatasetFileMetaIds',
        'datasetVersion' => 'DatasetVersion',
        'endFileUpdateTime' => 'EndFileUpdateTime',
        'endTagUpdateTime' => 'EndTagUpdateTime',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'order' => 'Order',
        'pageSize' => 'PageSize',
        'queryContentTypeIncludeAny' => 'QueryContentTypeIncludeAny',
        'queryExpression' => 'QueryExpression',
        'queryFileDir' => 'QueryFileDir',
        'queryFileName' => 'QueryFileName',
        'queryFileTypeIncludeAny' => 'QueryFileTypeIncludeAny',
        'queryImage' => 'QueryImage',
        'queryTagsExclude' => 'QueryTagsExclude',
        'queryTagsIncludeAll' => 'QueryTagsIncludeAll',
        'queryTagsIncludeAny' => 'QueryTagsIncludeAny',
        'queryText' => 'QueryText',
        'queryType' => 'QueryType',
        'queryVideo' => 'QueryVideo',
        'scoreThreshold' => 'ScoreThreshold',
        'sortBy' => 'SortBy',
        'startFileUpdateTime' => 'StartFileUpdateTime',
        'startTagUpdateTime' => 'StartTagUpdateTime',
        'status' => 'Status',
        'thumbnailMode' => 'ThumbnailMode',
        'topK' => 'TopK',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->datasetFileMetaIds)) {
            Model::validateArray($this->datasetFileMetaIds);
        }
        if (\is_array($this->queryContentTypeIncludeAny)) {
            Model::validateArray($this->queryContentTypeIncludeAny);
        }
        if (\is_array($this->queryFileTypeIncludeAny)) {
            Model::validateArray($this->queryFileTypeIncludeAny);
        }
        if (\is_array($this->queryTagsExclude)) {
            Model::validateArray($this->queryTagsExclude);
        }
        if (\is_array($this->queryTagsIncludeAll)) {
            Model::validateArray($this->queryTagsIncludeAll);
        }
        if (\is_array($this->queryTagsIncludeAny)) {
            Model::validateArray($this->queryTagsIncludeAny);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetFileMetaIds) {
            if (\is_array($this->datasetFileMetaIds)) {
                $res['DatasetFileMetaIds'] = [];
                $n1 = 0;
                foreach ($this->datasetFileMetaIds as $item1) {
                    $res['DatasetFileMetaIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->datasetVersion) {
            $res['DatasetVersion'] = $this->datasetVersion;
        }

        if (null !== $this->endFileUpdateTime) {
            $res['EndFileUpdateTime'] = $this->endFileUpdateTime;
        }

        if (null !== $this->endTagUpdateTime) {
            $res['EndTagUpdateTime'] = $this->endTagUpdateTime;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryContentTypeIncludeAny) {
            if (\is_array($this->queryContentTypeIncludeAny)) {
                $res['QueryContentTypeIncludeAny'] = [];
                $n1 = 0;
                foreach ($this->queryContentTypeIncludeAny as $item1) {
                    $res['QueryContentTypeIncludeAny'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryExpression) {
            $res['QueryExpression'] = $this->queryExpression;
        }

        if (null !== $this->queryFileDir) {
            $res['QueryFileDir'] = $this->queryFileDir;
        }

        if (null !== $this->queryFileName) {
            $res['QueryFileName'] = $this->queryFileName;
        }

        if (null !== $this->queryFileTypeIncludeAny) {
            if (\is_array($this->queryFileTypeIncludeAny)) {
                $res['QueryFileTypeIncludeAny'] = [];
                $n1 = 0;
                foreach ($this->queryFileTypeIncludeAny as $item1) {
                    $res['QueryFileTypeIncludeAny'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryImage) {
            $res['QueryImage'] = $this->queryImage;
        }

        if (null !== $this->queryTagsExclude) {
            if (\is_array($this->queryTagsExclude)) {
                $res['QueryTagsExclude'] = [];
                $n1 = 0;
                foreach ($this->queryTagsExclude as $item1) {
                    $res['QueryTagsExclude'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryTagsIncludeAll) {
            if (\is_array($this->queryTagsIncludeAll)) {
                $res['QueryTagsIncludeAll'] = [];
                $n1 = 0;
                foreach ($this->queryTagsIncludeAll as $item1) {
                    $res['QueryTagsIncludeAll'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryTagsIncludeAny) {
            if (\is_array($this->queryTagsIncludeAny)) {
                $res['QueryTagsIncludeAny'] = [];
                $n1 = 0;
                foreach ($this->queryTagsIncludeAny as $item1) {
                    $res['QueryTagsIncludeAny'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->queryText) {
            $res['QueryText'] = $this->queryText;
        }

        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }

        if (null !== $this->queryVideo) {
            $res['QueryVideo'] = $this->queryVideo;
        }

        if (null !== $this->scoreThreshold) {
            $res['ScoreThreshold'] = $this->scoreThreshold;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->startFileUpdateTime) {
            $res['StartFileUpdateTime'] = $this->startFileUpdateTime;
        }

        if (null !== $this->startTagUpdateTime) {
            $res['StartTagUpdateTime'] = $this->startTagUpdateTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->thumbnailMode) {
            $res['ThumbnailMode'] = $this->thumbnailMode;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
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
        if (isset($map['DatasetFileMetaIds'])) {
            if (!empty($map['DatasetFileMetaIds'])) {
                $model->datasetFileMetaIds = [];
                $n1 = 0;
                foreach ($map['DatasetFileMetaIds'] as $item1) {
                    $model->datasetFileMetaIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DatasetVersion'])) {
            $model->datasetVersion = $map['DatasetVersion'];
        }

        if (isset($map['EndFileUpdateTime'])) {
            $model->endFileUpdateTime = $map['EndFileUpdateTime'];
        }

        if (isset($map['EndTagUpdateTime'])) {
            $model->endTagUpdateTime = $map['EndTagUpdateTime'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryContentTypeIncludeAny'])) {
            if (!empty($map['QueryContentTypeIncludeAny'])) {
                $model->queryContentTypeIncludeAny = [];
                $n1 = 0;
                foreach ($map['QueryContentTypeIncludeAny'] as $item1) {
                    $model->queryContentTypeIncludeAny[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['QueryExpression'])) {
            $model->queryExpression = $map['QueryExpression'];
        }

        if (isset($map['QueryFileDir'])) {
            $model->queryFileDir = $map['QueryFileDir'];
        }

        if (isset($map['QueryFileName'])) {
            $model->queryFileName = $map['QueryFileName'];
        }

        if (isset($map['QueryFileTypeIncludeAny'])) {
            if (!empty($map['QueryFileTypeIncludeAny'])) {
                $model->queryFileTypeIncludeAny = [];
                $n1 = 0;
                foreach ($map['QueryFileTypeIncludeAny'] as $item1) {
                    $model->queryFileTypeIncludeAny[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['QueryImage'])) {
            $model->queryImage = $map['QueryImage'];
        }

        if (isset($map['QueryTagsExclude'])) {
            if (!empty($map['QueryTagsExclude'])) {
                $model->queryTagsExclude = [];
                $n1 = 0;
                foreach ($map['QueryTagsExclude'] as $item1) {
                    $model->queryTagsExclude[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['QueryTagsIncludeAll'])) {
            if (!empty($map['QueryTagsIncludeAll'])) {
                $model->queryTagsIncludeAll = [];
                $n1 = 0;
                foreach ($map['QueryTagsIncludeAll'] as $item1) {
                    $model->queryTagsIncludeAll[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['QueryTagsIncludeAny'])) {
            if (!empty($map['QueryTagsIncludeAny'])) {
                $model->queryTagsIncludeAny = [];
                $n1 = 0;
                foreach ($map['QueryTagsIncludeAny'] as $item1) {
                    $model->queryTagsIncludeAny[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['QueryText'])) {
            $model->queryText = $map['QueryText'];
        }

        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }

        if (isset($map['QueryVideo'])) {
            $model->queryVideo = $map['QueryVideo'];
        }

        if (isset($map['ScoreThreshold'])) {
            $model->scoreThreshold = $map['ScoreThreshold'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['StartFileUpdateTime'])) {
            $model->startFileUpdateTime = $map['StartFileUpdateTime'];
        }

        if (isset($map['StartTagUpdateTime'])) {
            $model->startTagUpdateTime = $map['StartTagUpdateTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ThumbnailMode'])) {
            $model->thumbnailMode = $map['ThumbnailMode'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
