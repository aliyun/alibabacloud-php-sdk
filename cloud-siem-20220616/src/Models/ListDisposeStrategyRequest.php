<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ListDisposeStrategyRequest extends Model
{
    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The status of the policy. Valid values:
     *
     *   0: invalid
     *   1: valid
     *
     * @example 0
     *
     * @var int
     */
    public $effectiveStatus;

    /**
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * @example 1577808000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The feature value of the entity. Fuzzy match is supported.
     *
     * @example test22.php
     *
     * @var string
     */
    public $entityIdentity;

    /**
     * @description The entity type of the playbook. Valid values:
     *
     *   ip
     *   process
     *   file
     *
     * @example ip
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The sort order. Valid values:
     *
     *   desc: descending order.
     *   asc: ascending order.
     *
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @description The sort field. Valid values:
     *
     *   GmtModified: sorts the policies by update time.
     *   GmtCreate: sorts the policies by creation time.
     *   FinishTime: sorts the policies by end time.
     *
     * @example GmtModified
     *
     * @var string
     */
    public $orderField;

    /**
     * @description The number of entries per page. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the playbook, which is the unique identifier of the playbook.
     *
     * @example WafBlockIP
     *
     * @var string
     */
    public $playbookName;

    /**
     * @description The type of the playbook. Valid values:
     *
     *   system: user-triggered playbook
     *   custom: event-triggered playbook
     *   custom_alert: alert-triggered playbook
     *   soar-manual: user-run playbook
     *   soar-mdr: MDR-run playbook
     *
     * @example system
     *
     * @var string
     */
    public $playbookTypes;

    /**
     * @description The UUID of the playbook.
     *
     * @example system_aliyun_clb_process_book
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $roleType;

    /**
     * @description The ID of the SOAR handling policy.
     *
     * @example a50a49b7-6044-4593-ab15-2b46567caadd
     *
     * @var string
     */
    public $sophonTaskId;

    /**
     * @description The beginning of the time range to query. Unit: milliseconds.
     *
     * @example 1577808000000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'effectiveStatus' => 'EffectiveStatus',
        'endTime'         => 'EndTime',
        'entityIdentity'  => 'EntityIdentity',
        'entityType'      => 'EntityType',
        'order'           => 'Order',
        'orderField'      => 'OrderField',
        'pageSize'        => 'PageSize',
        'playbookName'    => 'PlaybookName',
        'playbookTypes'   => 'PlaybookTypes',
        'playbookUuid'    => 'PlaybookUuid',
        'regionId'        => 'RegionId',
        'roleFor'         => 'RoleFor',
        'roleType'        => 'RoleType',
        'sophonTaskId'    => 'SophonTaskId',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->effectiveStatus) {
            $res['EffectiveStatus'] = $this->effectiveStatus;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->entityIdentity) {
            $res['EntityIdentity'] = $this->entityIdentity;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->playbookName) {
            $res['PlaybookName'] = $this->playbookName;
        }
        if (null !== $this->playbookTypes) {
            $res['PlaybookTypes'] = $this->playbookTypes;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->sophonTaskId) {
            $res['SophonTaskId'] = $this->sophonTaskId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDisposeStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EffectiveStatus'])) {
            $model->effectiveStatus = $map['EffectiveStatus'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EntityIdentity'])) {
            $model->entityIdentity = $map['EntityIdentity'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PlaybookName'])) {
            $model->playbookName = $map['PlaybookName'];
        }
        if (isset($map['PlaybookTypes'])) {
            $model->playbookTypes = $map['PlaybookTypes'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['SophonTaskId'])) {
            $model->sophonTaskId = $map['SophonTaskId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
