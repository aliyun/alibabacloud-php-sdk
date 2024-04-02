<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeAuditContentRequest extends Model
{
    /**
     * @var string
     */
    public $auditResult;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $keywordId;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $libType;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'auditResult'  => 'AuditResult',
        'bizType'      => 'BizType',
        'currentPage'  => 'CurrentPage',
        'dataId'       => 'DataId',
        'endDate'      => 'EndDate',
        'imageId'      => 'ImageId',
        'keywordId'    => 'KeywordId',
        'label'        => 'Label',
        'lang'         => 'Lang',
        'libType'      => 'LibType',
        'pageSize'     => 'PageSize',
        'resourceType' => 'ResourceType',
        'scene'        => 'Scene',
        'sourceIp'     => 'SourceIp',
        'startDate'    => 'StartDate',
        'suggestion'   => 'Suggestion',
        'taskId'       => 'TaskId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditResult) {
            $res['AuditResult'] = $this->auditResult;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->keywordId) {
            $res['KeywordId'] = $this->keywordId;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->libType) {
            $res['LibType'] = $this->libType;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAuditContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditResult'])) {
            $model->auditResult = $map['AuditResult'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['KeywordId'])) {
            $model->keywordId = $map['KeywordId'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LibType'])) {
            $model->libType = $map['LibType'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
