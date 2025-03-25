<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class ListJobSnapshotInfosRequest extends Model
{
    /**
     * @description Specifies whether to sort data in ascending order.
     *
     * @example true
     *
     * @var bool
     */
    public $ascOrder;

    /**
     * @description The ID of the upstream node.
     *
     * @var string[]
     */
    public $extNodeIdList;

    /**
     * @description Start timestamp.
     * > This parameter is invalid. The end timestamp should be the time point for the snapshot you want to view.
     *
     * @example 1706840714
     *
     * @var int
     */
    public $from;

    /**
     * @description The instance ID.
     *
     * @var string[]
     */
    public $instanceIdList;

    /**
     * @description The account that commits the job.
     *
     * @var string[]
     */
    public $jobOwnerList;

    /**
     * @description The priority of the job.
     *
     * @var int[]
     */
    public $priorityList;

    /**
     * @description The name of project.
     *
     * @var string[]
     */
    public $projectList;

    /**
     * @description The nickname of the compute Quota used by the job.
     *
     * @example quota_A
     *
     * @var string
     */
    public $quotaNickname;

    /**
     * @description The signature of the SQL job.
     *
     * @var string[]
     */
    public $signatureList;

    /**
     * @description The sorting columns.
     *
     * @var string[]
     */
    public $sortByList;

    /**
     * @description The orders for the sorting columns.
     *
     * @var string[]
     */
    public $sortOrderList;

    /**
     * @description The status of jobs.
     *
     * @var string[]
     */
    public $statusList;

    /**
     * @description End timestamp.
     *
     * This parameter is required.
     *
     * @example 1706840714
     *
     * @var int
     */
    public $to;

    /**
     * @description The type of the job.
     *
     * @var string[]
     */
    public $typeList;

    /**
     * @description The sorting column.
     *
     * @example cpuUsage
     *
     * @var string
     */
    public $orderColumn;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID.
     *
     * @example cn-chengdu
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the tenant. You can log on to the MaxCompute console, and choose Tenants > Tenant Property from the left-side navigation pane to view the tenant ID.
     *
     * @example 478403690625249
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'ascOrder' => 'ascOrder',
        'extNodeIdList' => 'extNodeIdList',
        'from' => 'from',
        'instanceIdList' => 'instanceIdList',
        'jobOwnerList' => 'jobOwnerList',
        'priorityList' => 'priorityList',
        'projectList' => 'projectList',
        'quotaNickname' => 'quotaNickname',
        'signatureList' => 'signatureList',
        'sortByList' => 'sortByList',
        'sortOrderList' => 'sortOrderList',
        'statusList' => 'statusList',
        'to' => 'to',
        'typeList' => 'typeList',
        'orderColumn' => 'orderColumn',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'region' => 'region',
        'tenantId' => 'tenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ascOrder) {
            $res['ascOrder'] = $this->ascOrder;
        }
        if (null !== $this->extNodeIdList) {
            $res['extNodeIdList'] = $this->extNodeIdList;
        }
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }
        if (null !== $this->instanceIdList) {
            $res['instanceIdList'] = $this->instanceIdList;
        }
        if (null !== $this->jobOwnerList) {
            $res['jobOwnerList'] = $this->jobOwnerList;
        }
        if (null !== $this->priorityList) {
            $res['priorityList'] = $this->priorityList;
        }
        if (null !== $this->projectList) {
            $res['projectList'] = $this->projectList;
        }
        if (null !== $this->quotaNickname) {
            $res['quotaNickname'] = $this->quotaNickname;
        }
        if (null !== $this->signatureList) {
            $res['signatureList'] = $this->signatureList;
        }
        if (null !== $this->sortByList) {
            $res['sortByList'] = $this->sortByList;
        }
        if (null !== $this->sortOrderList) {
            $res['sortOrderList'] = $this->sortOrderList;
        }
        if (null !== $this->statusList) {
            $res['statusList'] = $this->statusList;
        }
        if (null !== $this->to) {
            $res['to'] = $this->to;
        }
        if (null !== $this->typeList) {
            $res['typeList'] = $this->typeList;
        }
        if (null !== $this->orderColumn) {
            $res['orderColumn'] = $this->orderColumn;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobSnapshotInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ascOrder'])) {
            $model->ascOrder = $map['ascOrder'];
        }
        if (isset($map['extNodeIdList'])) {
            if (!empty($map['extNodeIdList'])) {
                $model->extNodeIdList = $map['extNodeIdList'];
            }
        }
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }
        if (isset($map['instanceIdList'])) {
            if (!empty($map['instanceIdList'])) {
                $model->instanceIdList = $map['instanceIdList'];
            }
        }
        if (isset($map['jobOwnerList'])) {
            if (!empty($map['jobOwnerList'])) {
                $model->jobOwnerList = $map['jobOwnerList'];
            }
        }
        if (isset($map['priorityList'])) {
            if (!empty($map['priorityList'])) {
                $model->priorityList = $map['priorityList'];
            }
        }
        if (isset($map['projectList'])) {
            if (!empty($map['projectList'])) {
                $model->projectList = $map['projectList'];
            }
        }
        if (isset($map['quotaNickname'])) {
            $model->quotaNickname = $map['quotaNickname'];
        }
        if (isset($map['signatureList'])) {
            if (!empty($map['signatureList'])) {
                $model->signatureList = $map['signatureList'];
            }
        }
        if (isset($map['sortByList'])) {
            if (!empty($map['sortByList'])) {
                $model->sortByList = $map['sortByList'];
            }
        }
        if (isset($map['sortOrderList'])) {
            if (!empty($map['sortOrderList'])) {
                $model->sortOrderList = $map['sortOrderList'];
            }
        }
        if (isset($map['statusList'])) {
            if (!empty($map['statusList'])) {
                $model->statusList = $map['statusList'];
            }
        }
        if (isset($map['to'])) {
            $model->to = $map['to'];
        }
        if (isset($map['typeList'])) {
            if (!empty($map['typeList'])) {
                $model->typeList = $map['typeList'];
            }
        }
        if (isset($map['orderColumn'])) {
            $model->orderColumn = $map['orderColumn'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
