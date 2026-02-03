<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SearchDatasetDocumentsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $categoryUuidsShrink;

    /**
     * @var int
     */
    public $createTimeEnd;

    /**
     * @var int
     */
    public $createTimeStart;

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
    public $docIdsShrink;

    /**
     * @var string
     */
    public $docTypesShrink;

    /**
     * @var string
     */
    public $docUuidsShrink;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $extend1;

    /**
     * @var string
     */
    public $extend2;

    /**
     * @var string
     */
    public $extend3;

    /**
     * @var bool
     */
    public $includeContent;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $searchMode;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'categoryUuidsShrink' => 'CategoryUuids',
        'createTimeEnd' => 'CreateTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'datasetId' => 'DatasetId',
        'datasetName' => 'DatasetName',
        'docIdsShrink' => 'DocIds',
        'docTypesShrink' => 'DocTypes',
        'docUuidsShrink' => 'DocUuids',
        'endTime' => 'EndTime',
        'extend1' => 'Extend1',
        'extend2' => 'Extend2',
        'extend3' => 'Extend3',
        'includeContent' => 'IncludeContent',
        'pageSize' => 'PageSize',
        'query' => 'Query',
        'searchMode' => 'SearchMode',
        'startTime' => 'StartTime',
        'tagsShrink' => 'Tags',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryUuidsShrink) {
            $res['CategoryUuids'] = $this->categoryUuidsShrink;
        }

        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }

        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->docIdsShrink) {
            $res['DocIds'] = $this->docIdsShrink;
        }

        if (null !== $this->docTypesShrink) {
            $res['DocTypes'] = $this->docTypesShrink;
        }

        if (null !== $this->docUuidsShrink) {
            $res['DocUuids'] = $this->docUuidsShrink;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->extend1) {
            $res['Extend1'] = $this->extend1;
        }

        if (null !== $this->extend2) {
            $res['Extend2'] = $this->extend2;
        }

        if (null !== $this->extend3) {
            $res['Extend3'] = $this->extend3;
        }

        if (null !== $this->includeContent) {
            $res['IncludeContent'] = $this->includeContent;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
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
        if (isset($map['CategoryUuids'])) {
            $model->categoryUuidsShrink = $map['CategoryUuids'];
        }

        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }

        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['DocIds'])) {
            $model->docIdsShrink = $map['DocIds'];
        }

        if (isset($map['DocTypes'])) {
            $model->docTypesShrink = $map['DocTypes'];
        }

        if (isset($map['DocUuids'])) {
            $model->docUuidsShrink = $map['DocUuids'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Extend1'])) {
            $model->extend1 = $map['Extend1'];
        }

        if (isset($map['Extend2'])) {
            $model->extend2 = $map['Extend2'];
        }

        if (isset($map['Extend3'])) {
            $model->extend3 = $map['Extend3'];
        }

        if (isset($map['IncludeContent'])) {
            $model->includeContent = $map['IncludeContent'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
