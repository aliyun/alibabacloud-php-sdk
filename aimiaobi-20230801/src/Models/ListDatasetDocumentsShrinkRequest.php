<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetDocumentsShrinkRequest extends Model
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
     * @var string
     */
    public $datasetDescription;

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
    public $docType;

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
    public $excludeFieldsShrink;

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
     * @var string
     */
    public $includeFieldsShrink;

    /**
     * @var string
     */
    public $nextToken;

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
    public $query;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'categoryUuidsShrink' => 'CategoryUuids',
        'createTimeEnd' => 'CreateTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'datasetDescription' => 'DatasetDescription',
        'datasetId' => 'DatasetId',
        'datasetName' => 'DatasetName',
        'docIdsShrink' => 'DocIds',
        'docType' => 'DocType',
        'docUuidsShrink' => 'DocUuids',
        'endTime' => 'EndTime',
        'excludeFieldsShrink' => 'ExcludeFields',
        'extend1' => 'Extend1',
        'extend2' => 'Extend2',
        'extend3' => 'Extend3',
        'includeFieldsShrink' => 'IncludeFields',
        'nextToken' => 'NextToken',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'query' => 'Query',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'tagsShrink' => 'Tags',
        'title' => 'Title',
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

        if (null !== $this->datasetDescription) {
            $res['DatasetDescription'] = $this->datasetDescription;
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

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->docUuidsShrink) {
            $res['DocUuids'] = $this->docUuidsShrink;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->excludeFieldsShrink) {
            $res['ExcludeFields'] = $this->excludeFieldsShrink;
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

        if (null !== $this->includeFieldsShrink) {
            $res['IncludeFields'] = $this->includeFieldsShrink;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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

        if (isset($map['DatasetDescription'])) {
            $model->datasetDescription = $map['DatasetDescription'];
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

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['DocUuids'])) {
            $model->docUuidsShrink = $map['DocUuids'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExcludeFields'])) {
            $model->excludeFieldsShrink = $map['ExcludeFields'];
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

        if (isset($map['IncludeFields'])) {
            $model->includeFieldsShrink = $map['IncludeFields'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
