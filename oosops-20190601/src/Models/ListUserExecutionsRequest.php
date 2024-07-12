<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListUserExecutionsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $endDateAfter;

    /**
     * @var string
     */
    public $endDateBefore;

    /**
     * @var string
     */
    public $executedBy;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var bool
     */
    public $includeChildExecution;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $parentExecutionId;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sortField;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $startDateAfter;

    /**
     * @var string
     */
    public $startDateBefore;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'aliUid'                => 'AliUid',
        'endDateAfter'          => 'EndDateAfter',
        'endDateBefore'         => 'EndDateBefore',
        'executedBy'            => 'ExecutedBy',
        'executionId'           => 'ExecutionId',
        'includeChildExecution' => 'IncludeChildExecution',
        'maxResults'            => 'MaxResults',
        'mode'                  => 'Mode',
        'nextToken'             => 'NextToken',
        'parentExecutionId'     => 'ParentExecutionId',
        'ramRole'               => 'RamRole',
        'regionId'              => 'RegionId',
        'sortField'             => 'SortField',
        'sortOrder'             => 'SortOrder',
        'startDateAfter'        => 'StartDateAfter',
        'startDateBefore'       => 'StartDateBefore',
        'status'                => 'Status',
        'templateName'          => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->endDateAfter) {
            $res['EndDateAfter'] = $this->endDateAfter;
        }
        if (null !== $this->endDateBefore) {
            $res['EndDateBefore'] = $this->endDateBefore;
        }
        if (null !== $this->executedBy) {
            $res['ExecutedBy'] = $this->executedBy;
        }
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->includeChildExecution) {
            $res['IncludeChildExecution'] = $this->includeChildExecution;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->parentExecutionId) {
            $res['ParentExecutionId'] = $this->parentExecutionId;
        }
        if (null !== $this->ramRole) {
            $res['RamRole'] = $this->ramRole;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->startDateAfter) {
            $res['StartDateAfter'] = $this->startDateAfter;
        }
        if (null !== $this->startDateBefore) {
            $res['StartDateBefore'] = $this->startDateBefore;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserExecutionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['EndDateAfter'])) {
            $model->endDateAfter = $map['EndDateAfter'];
        }
        if (isset($map['EndDateBefore'])) {
            $model->endDateBefore = $map['EndDateBefore'];
        }
        if (isset($map['ExecutedBy'])) {
            $model->executedBy = $map['ExecutedBy'];
        }
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['IncludeChildExecution'])) {
            $model->includeChildExecution = $map['IncludeChildExecution'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ParentExecutionId'])) {
            $model->parentExecutionId = $map['ParentExecutionId'];
        }
        if (isset($map['RamRole'])) {
            $model->ramRole = $map['RamRole'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['StartDateAfter'])) {
            $model->startDateAfter = $map['StartDateAfter'];
        }
        if (isset($map['StartDateBefore'])) {
            $model->startDateBefore = $map['StartDateBefore'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
