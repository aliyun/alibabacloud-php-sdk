<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetDocumentsShrinkRequest extends Model
{
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
    public $docType;
    /**
     * @var string
     */
    public $excludeFieldsShrink;
    /**
     * @var string
     */
    public $includeFieldsShrink;
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
    public $status;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetDescription'  => 'DatasetDescription',
        'datasetId'           => 'DatasetId',
        'datasetName'         => 'DatasetName',
        'docType'             => 'DocType',
        'excludeFieldsShrink' => 'ExcludeFields',
        'includeFieldsShrink' => 'IncludeFields',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'query'               => 'Query',
        'status'              => 'Status',
        'workspaceId'         => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetDescription) {
            $res['DatasetDescription'] = $this->datasetDescription;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }

        if (null !== $this->excludeFieldsShrink) {
            $res['ExcludeFields'] = $this->excludeFieldsShrink;
        }

        if (null !== $this->includeFieldsShrink) {
            $res['IncludeFields'] = $this->includeFieldsShrink;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DatasetDescription'])) {
            $model->datasetDescription = $map['DatasetDescription'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }

        if (isset($map['ExcludeFields'])) {
            $model->excludeFieldsShrink = $map['ExcludeFields'];
        }

        if (isset($map['IncludeFields'])) {
            $model->includeFieldsShrink = $map['IncludeFields'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
