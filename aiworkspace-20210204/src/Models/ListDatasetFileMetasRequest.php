<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetFileMetasRequest extends Model
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
     * @var int
     */
    public $topK;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetVersion'      => 'DatasetVersion',
        'endFileUpdateTime'   => 'EndFileUpdateTime',
        'nextToken'           => 'NextToken',
        'order'               => 'Order',
        'pageSize'            => 'PageSize',
        'queryText'           => 'QueryText',
        'queryType'           => 'QueryType',
        'scoreThreshold'      => 'ScoreThreshold',
        'sortBy'              => 'SortBy',
        'startFileUpdateTime' => 'StartFileUpdateTime',
        'topK'                => 'TopK',
        'workspaceId'         => 'WorkspaceId',
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

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
