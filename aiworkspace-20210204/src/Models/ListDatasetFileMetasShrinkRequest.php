<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetFileMetasShrinkRequest extends Model
{
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
     * @var string
     */
    public $queryContentTypeIncludeAnyShrink;

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
     * @var string
     */
    public $queryFileTypeIncludeAnyShrink;

    /**
     * @var string
     */
    public $queryImage;

    /**
     * @var string
     */
    public $queryTagsExcludeShrink;

    /**
     * @var string
     */
    public $queryTagsIncludeAllShrink;

    /**
     * @var string
     */
    public $queryTagsIncludeAnyShrink;

    /**
     * @var string
     */
    public $queryText;

    /**
     * @var string
     */
    public $queryType;

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
        'datasetVersion' => 'DatasetVersion',
        'endFileUpdateTime' => 'EndFileUpdateTime',
        'endTagUpdateTime' => 'EndTagUpdateTime',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'order' => 'Order',
        'pageSize' => 'PageSize',
        'queryContentTypeIncludeAnyShrink' => 'QueryContentTypeIncludeAny',
        'queryExpression' => 'QueryExpression',
        'queryFileDir' => 'QueryFileDir',
        'queryFileName' => 'QueryFileName',
        'queryFileTypeIncludeAnyShrink' => 'QueryFileTypeIncludeAny',
        'queryImage' => 'QueryImage',
        'queryTagsExcludeShrink' => 'QueryTagsExclude',
        'queryTagsIncludeAllShrink' => 'QueryTagsIncludeAll',
        'queryTagsIncludeAnyShrink' => 'QueryTagsIncludeAny',
        'queryText' => 'QueryText',
        'queryType' => 'QueryType',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->queryContentTypeIncludeAnyShrink) {
            $res['QueryContentTypeIncludeAny'] = $this->queryContentTypeIncludeAnyShrink;
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

        if (null !== $this->queryFileTypeIncludeAnyShrink) {
            $res['QueryFileTypeIncludeAny'] = $this->queryFileTypeIncludeAnyShrink;
        }

        if (null !== $this->queryImage) {
            $res['QueryImage'] = $this->queryImage;
        }

        if (null !== $this->queryTagsExcludeShrink) {
            $res['QueryTagsExclude'] = $this->queryTagsExcludeShrink;
        }

        if (null !== $this->queryTagsIncludeAllShrink) {
            $res['QueryTagsIncludeAll'] = $this->queryTagsIncludeAllShrink;
        }

        if (null !== $this->queryTagsIncludeAnyShrink) {
            $res['QueryTagsIncludeAny'] = $this->queryTagsIncludeAnyShrink;
        }

        if (null !== $this->queryText) {
            $res['QueryText'] = $this->queryText;
        }

        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
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
            $model->queryContentTypeIncludeAnyShrink = $map['QueryContentTypeIncludeAny'];
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
            $model->queryFileTypeIncludeAnyShrink = $map['QueryFileTypeIncludeAny'];
        }

        if (isset($map['QueryImage'])) {
            $model->queryImage = $map['QueryImage'];
        }

        if (isset($map['QueryTagsExclude'])) {
            $model->queryTagsExcludeShrink = $map['QueryTagsExclude'];
        }

        if (isset($map['QueryTagsIncludeAll'])) {
            $model->queryTagsIncludeAllShrink = $map['QueryTagsIncludeAll'];
        }

        if (isset($map['QueryTagsIncludeAny'])) {
            $model->queryTagsIncludeAnyShrink = $map['QueryTagsIncludeAny'];
        }

        if (isset($map['QueryText'])) {
            $model->queryText = $map['QueryText'];
        }

        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
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
