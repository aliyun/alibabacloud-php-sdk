<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListExecutionsShrinkRequest extends Model
{
    /**
     * @description 执行的模板类型列表。可分为Other、TimerTrigger、EventTrigger、AlarmTrigger。此参数和Categories参数只能同时传入一个，推荐使用Categories。
     *
     * @example ["TimerTrigger"、"EventTrigger"]
     *
     * @var string
     */
    public $categories;

    /**
     * @description The type of the execution template. Valid values: Other, TimerTrigger, EventTrigger, and AlarmTrigger.
     *
     * @example Other
     *
     * @var string
     */
    public $category;

    /**
     * @description 执行的深度，可分为RootDepth、FirstChildDepth
     * RootDepth只返回主执行，FirstChildDepth只返回第一层的子执行。此参数和IncludeChildExecution参数只能同时传入一个，推荐使用Depth。
     * @example RootDepth
     *
     * @var string
     */
    public $depth;

    /**
     * @example MyDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The earliest end time. The executions that stop running at or later than the specified time are queried.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $endDateAfter;

    /**
     * @description The latest end time. The executions that stop running at or earlier than the specified time are queried.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $endDateBefore;

    /**
     * @description The executor.
     *
     * @example vme
     *
     * @var string
     */
    public $executedBy;

    /**
     * @description The ID of the execution.
     *
     * @example exec-xxx
     *
     * @var string
     */
    public $executionId;

    /**
     * @description Specifies whether to include child executions. Default value: False.
     *
     * @example true
     *
     * @var bool
     */
    public $includeChildExecution;

    /**
     * @description The number of entries to return on each page. Valid values: 10 to 100. Default value: 50.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The execution mode. Valid values:
     *
     *   **Automatic**
     *   **Debug**
     *
     * @example Automatic
     *
     * @var string
     */
    public $mode;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctMTJDQzQ
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the parent execution.
     *
     * @example exec-xxx
     *
     * @var string
     */
    public $parentExecutionId;

    /**
     * @description The RAM role.
     *
     * @example OOSServiceRole
     *
     * @var string
     */
    public $ramRole;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instances you want to query belong.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the Elastic Compute Service (ECS) resource.
     *
     * @example i-xxx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the resource template.
     *
     * @example ACS-ECS-TEST
     *
     * @var string
     */
    public $resourceTemplateName;

    /**
     * @description The field that is used to sort the executions to query. Valid values:
     *
     *   **StartDate**: specifies that the executions are sorted based on the time when they are created. This is the default value.
     *   **EndDate**: specifies that the executions are sorted based on the time when they stop running.
     *   **Status**: specifies that the executions are sorted based on their states.
     *
     * @example StartDate
     *
     * @var string
     */
    public $sortField;

    /**
     * @description The order in which you want to sort the results. Valid values:
     *
     *   **Ascending**: ascending order.
     *   **Descending**: descending order. This is the default value.
     *
     * @example Ascending
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @description The earliest start time. The executions that start to run at or later than the specified time are queried.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $startDateAfter;

    /**
     * @description The latest start time. The executions that start to run at or earlier than the specified point in time are queried.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $startDateBefore;

    /**
     * @description The status of the execution. Valid values: Running, Started, Success, Failed, Waiting, Cancelled, Pending, and Skipped.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags for the execution.
     *
     * @example {"k1":"v2","k2":"v2"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description The name of the template. All templates whose names contain the specified template name are queried.
     *
     * @example MyTemplate
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'categories'            => 'Categories',
        'category'              => 'Category',
        'depth'                 => 'Depth',
        'description'           => 'Description',
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
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceId'            => 'ResourceId',
        'resourceTemplateName'  => 'ResourceTemplateName',
        'sortField'             => 'SortField',
        'sortOrder'             => 'SortOrder',
        'startDateAfter'        => 'StartDateAfter',
        'startDateBefore'       => 'StartDateBefore',
        'status'                => 'Status',
        'tagsShrink'            => 'Tags',
        'templateName'          => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = $this->categories;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceTemplateName) {
            $res['ResourceTemplateName'] = $this->resourceTemplateName;
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
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExecutionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            $model->categories = $map['Categories'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceTemplateName'])) {
            $model->resourceTemplateName = $map['ResourceTemplateName'];
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
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
