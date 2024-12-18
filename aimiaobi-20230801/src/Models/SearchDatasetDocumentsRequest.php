<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class SearchDatasetDocumentsRequest extends Model
{
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
     * @example 业务参数
     *
     * @var string
     */
    public $extend1;

    /**
     * @example false
     *
     * @var bool
     */
    public $includeContent;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example 搜索内容
     *
     * @var string
     */
    public $query;

    /**
     * @description This parameter is required.
     *
     * @example xx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'datasetId'      => 'DatasetId',
        'datasetName'    => 'DatasetName',
        'extend1'        => 'Extend1',
        'includeContent' => 'IncludeContent',
        'pageSize'       => 'PageSize',
        'query'          => 'Query',
        'workspaceId'    => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->extend1) {
            $res['Extend1'] = $this->extend1;
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
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchDatasetDocumentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Extend1'])) {
            $model->extend1 = $map['Extend1'];
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
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
