<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ListDatasetDocumentsRequest extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $datasetDescription;

    /**
     * @example 1
     *
     * @var int
     */
    public $datasetId;

    /**
     * @example 数据集名称
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example text
     *
     * @var string
     */
    public $docType;

    /**
     * @var string[]
     */
    public $excludeFields;

    /**
     * @var string[]
     */
    public $includeFields;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 搜索条件
     *
     * @var string
     */
    public $query;

    /**
     * @example 100
     *
     * @var int
     */
    public $status;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetDescription' => 'DatasetDescription',
        'datasetId'          => 'DatasetId',
        'datasetName'        => 'DatasetName',
        'docType'            => 'DocType',
        'excludeFields'      => 'ExcludeFields',
        'includeFields'      => 'IncludeFields',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'query'              => 'Query',
        'status'             => 'Status',
        'workspaceId'        => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->excludeFields) {
            $res['ExcludeFields'] = $this->excludeFields;
        }
        if (null !== $this->includeFields) {
            $res['IncludeFields'] = $this->includeFields;
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

    /**
     * @param array $map
     *
     * @return ListDatasetDocumentsRequest
     */
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
            if (!empty($map['ExcludeFields'])) {
                $model->excludeFields = $map['ExcludeFields'];
            }
        }
        if (isset($map['IncludeFields'])) {
            if (!empty($map['IncludeFields'])) {
                $model->includeFields = $map['IncludeFields'];
            }
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
