<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class ListRunsRequest extends Model
{
    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appName;

    /**
     * @description 应用版本
     *
     * @var string
     */
    public $appRevision;

    /**
     * @description 实体名称
     *
     * @var string
     */
    public $entityName;

    /**
     * @description 实体类型
     *
     * @var string
     */
    public $entityType;

    /**
     * @description 是否返回所有任务条数
     *
     * @var bool
     */
    public $getTotal;

    /**
     * @description 是否逆序
     *
     * @var bool
     */
    public $isReversed;

    /**
     * @description 标签选择
     *
     * @var string
     */
    public $labelSelector;

    /**
     * @description 最大返回个数
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 查询起始位置
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 排序依据
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description 搜索ID
     *
     * @var string
     */
    public $search;

    /**
     * @description 状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 提交ID
     *
     * @var string
     */
    public $submissionId;

    /**
     * @description 工作空间
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'       => 'AppName',
        'appRevision'   => 'AppRevision',
        'entityName'    => 'EntityName',
        'entityType'    => 'EntityType',
        'getTotal'      => 'GetTotal',
        'isReversed'    => 'IsReversed',
        'labelSelector' => 'LabelSelector',
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'orderBy'       => 'OrderBy',
        'search'        => 'Search',
        'status'        => 'Status',
        'submissionId'  => 'SubmissionId',
        'workspace'     => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appRevision) {
            $res['AppRevision'] = $this->appRevision;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->getTotal) {
            $res['GetTotal'] = $this->getTotal;
        }
        if (null !== $this->isReversed) {
            $res['IsReversed'] = $this->isReversed;
        }
        if (null !== $this->labelSelector) {
            $res['LabelSelector'] = $this->labelSelector;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submissionId) {
            $res['SubmissionId'] = $this->submissionId;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRunsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppRevision'])) {
            $model->appRevision = $map['AppRevision'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['GetTotal'])) {
            $model->getTotal = $map['GetTotal'];
        }
        if (isset($map['IsReversed'])) {
            $model->isReversed = $map['IsReversed'];
        }
        if (isset($map['LabelSelector'])) {
            $model->labelSelector = $map['LabelSelector'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmissionId'])) {
            $model->submissionId = $map['SubmissionId'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
