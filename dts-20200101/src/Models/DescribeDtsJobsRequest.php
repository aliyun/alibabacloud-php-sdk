<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDtsJobsRequest extends Model
{
    /**
     * @description The ID of the DTS dedicated cluster on which the task runs.
     *
     * @example dtscluster_atyl3b5214uk***
     *
     * @var string
     */
    public $dedicatedClusterId;

    /**
     * @description The environment tag of the DTS instance. Valid values:
     *
     * - **normal**
     * - **online**
     * @example normal
     *
     * @var string
     */
    public $dtsBisLabel;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking instance.
     *
     * @example dtsi03e3zty16i****
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example qa110wq5r93hb49
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The ID of the parent task.
     *
     * >  In most cases, you do not need to specify this parameter.
     * @example pk13r731m****
     *
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @description The type of the DTS task. Valid values:
     *
     *   **MIGRATION**: data migration. This is the default value.
     *   **SYNC**: data synchronization.
     *   **SUBSCRIBE**: change tracking.
     *
     * @example MIGRATION
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The basis on which the returned DTS tasks are sorted. Valid values:
     *
     *   **CreateTime**: sorts the DTS tasks based on the points in time when the DTS tasks are created.
     *   **FinishTime**: sorts the DTS tasks based on the points in time when the DTS tasks are complete.
     *   **duLimit** sorts the DTS tasks based on the upper limits on DTS Units (DUs) that the DTS tasks can use. This option applies only to the DTS tasks that are run on a DTS dedicated cluster.
     *
     * >  You can also set the **OrderDirection** parameter to specify whether to sort the DTS tasks in ascending or descending order.
     * @example CreateTime
     *
     * @var string
     */
    public $orderColumn;

    /**
     * @description The order in which the returned DTS tasks are sorted. Valid values:
     *
     *   **ASC**: sorts the DTS tasks in ascending order. This is the default value.
     *   **DESC**: sorts the DTS tasks in descending order.
     *
     * @example ASC
     *
     * @var string
     */
    public $orderDirection;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than **0** and does not exceed the maximum value of the Integer data type. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: **30**, **50**, and **100**. Default value: **30**.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The content of the query condition.
     *
     * >  You must set the **Type** parameter to specify the type of the query condition.
     * @example dtspk3f13r731m****
     *
     * @var string
     */
    public $params;

    /**
     * @description The ID of the region in which the DTS instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description This parameter is discontinued.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The state of the DTS task.
     *
     * Valid values for a data migration task:
     *
     *   **NotStarted**: The task is not started.
     *   **Prechecking**: The task is being prechecked.
     *   **PrecheckFailed**: The task failed to pass the precheck.
     *   **PreCheckPass**: The task passed the precheck.
     *   **NotConfigured**: The task is not configured.
     *   **Migrating**: The task is in progress.
     *   **Suspending**: The task is paused.
     *   **MigrationFailed**: The task failed.
     *   **Finished**: The task is complete.
     *   **Retrying**: The task is being retried.
     *   **Upgrade**: The task is being upgraded.
     *   **Locked**: The task is locked.
     *   **Downgrade**: The task is being downgraded.
     *
     * Valid values for a data synchronization task:
     *
     *   **NotStarted**: The task is not started.
     *   **Prechecking**: The task is being prechecked.
     *   **PrecheckFailed**: The task failed to pass the precheck.
     *   **PreCheckPass**: The task passed the precheck.
     *   **NotConfigured**: The task is not configured.
     *   **Initializing**: The task is being initialized.
     *   **InitializeFailed**: Initialization failed.
     *   **Synchronizing**: The task is in progress.
     *   **Failed**: The task failed.
     *   **Suspending**: The task is paused.
     *   **Modifying**: The objects in the task are being modified.
     *   **Finished**: The task is complete.
     *   **Retrying**: The task is being retried.
     *   **Upgrade**: The task is being upgraded.
     *   **Locked**: The task is locked.
     *   **Downgrade**: The task is being downgraded.
     *
     * Valid values for a change tracking task:
     *
     *   **NotConfigured**: The task is not configured.
     *   **NotStarted**: The task is not started.
     *   **Prechecking**: The task is being prechecked.
     *   **PrecheckFailed**: The task failed to pass the precheck.
     *   **PreCheckPass**: The task passed the precheck.
     *   **Starting**: The task is being started.
     *   **Normal**: The task is running as expected.
     *   **Retrying**: The task is being retried.
     *   **Abnormal**: The task is not running as expected.
     *   **Upgrade**: The task is being upgraded.
     *   **Locked**: The task is locked.
     *   **Downgrade**: The task is being downgraded.
     *
     * @example Migrating
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the DTS task to be queried. Specify tags in the JSON format.
     *
     * >  You can call the **ListTagResources** operation to query the tag key and tag value.
     * @example [     {         \\"key\\": \\"testK\\",         \\"value\\": \\"testV\\"     }  ]
     *
     * @var string
     */
    public $tags;

    /**
     * @description The type of the query condition. Valid values:
     *
     *   **instance**: queries DTS tasks based on the ID of a DTS instance.
     *   **name**: queries DTS tasks based on the name of a DTS instance. Fuzzy match is supported.
     *   **srcRds**: queries DTS tasks based on the ID of an ApsaraDB RDS instance. The ApsaraDB RDS instance is the source instance of a DTS task.
     *   **rds**: queries DTS tasks based on the ID of an ApsaraDB RDS instance. The ApsaraDB RDS instance is the destination instance of a DTS task.
     *
     * >  You must set the **Params** parameter to specify the content of the query condition.
     * @example instance
     *
     * @var string
     */
    public $type;

    /**
     * @description Specifies whether to skip the **DbObject** parameter in the response. The DbObject parameter specifies the objects of the data migration, data synchronization, or change tracking task. Valid values:
     *
     * - **true**: does not return **DbObject**.
     * - **false**: returns **DbObject**. If you set this parameter to false, the response time is shortened.
     * @example true
     *
     * @var bool
     */
    public $withoutDbList;

    /**
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'dedicatedClusterId' => 'DedicatedClusterId',
        'dtsBisLabel'        => 'DtsBisLabel',
        'dtsInstanceId'      => 'DtsInstanceId',
        'dtsJobId'           => 'DtsJobId',
        'groupId'            => 'GroupId',
        'instanceId'         => 'InstanceId',
        'instanceType'       => 'InstanceType',
        'jobType'            => 'JobType',
        'orderColumn'        => 'OrderColumn',
        'orderDirection'     => 'OrderDirection',
        'ownerId'            => 'OwnerId',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'params'             => 'Params',
        'region'             => 'Region',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'status'             => 'Status',
        'tags'               => 'Tags',
        'type'               => 'Type',
        'withoutDbList'      => 'WithoutDbList',
        'zeroEtlJob'         => 'ZeroEtlJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedClusterId) {
            $res['DedicatedClusterId'] = $this->dedicatedClusterId;
        }
        if (null !== $this->dtsBisLabel) {
            $res['DtsBisLabel'] = $this->dtsBisLabel;
        }
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->orderColumn) {
            $res['OrderColumn'] = $this->orderColumn;
        }
        if (null !== $this->orderDirection) {
            $res['OrderDirection'] = $this->orderDirection;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->withoutDbList) {
            $res['WithoutDbList'] = $this->withoutDbList;
        }
        if (null !== $this->zeroEtlJob) {
            $res['ZeroEtlJob'] = $this->zeroEtlJob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDtsJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedClusterId'])) {
            $model->dedicatedClusterId = $map['DedicatedClusterId'];
        }
        if (isset($map['DtsBisLabel'])) {
            $model->dtsBisLabel = $map['DtsBisLabel'];
        }
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['OrderColumn'])) {
            $model->orderColumn = $map['OrderColumn'];
        }
        if (isset($map['OrderDirection'])) {
            $model->orderDirection = $map['OrderDirection'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WithoutDbList'])) {
            $model->withoutDbList = $map['WithoutDbList'];
        }
        if (isset($map['ZeroEtlJob'])) {
            $model->zeroEtlJob = $map['ZeroEtlJob'];
        }

        return $model;
    }
}
