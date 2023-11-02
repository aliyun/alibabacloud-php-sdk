<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ListDisposeStrategyRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 0
     *
     * @var int
     */
    public $effectiveStatus;

    /**
     * @example 1577808000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example test22.php
     *
     * @var string
     */
    public $entityIdentity;

    /**
     * @example ip
     *
     * @var string
     */
    public $entityType;

    /**
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @example GmtModified
     *
     * @var string
     */
    public $orderField;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example WafBlockIP
     *
     * @var string
     */
    public $playbookName;

    /**
     * @example system
     *
     * @var string
     */
    public $playbookTypes;

    /**
     * @example system_aliyun_clb_process_book
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example a50a49b7-6044-4593-ab15-2b46567caadd
     *
     * @var string
     */
    public $sophonTaskId;

    /**
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
        if (isset($map['SophonTaskId'])) {
            $model->sophonTaskId = $map['SophonTaskId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
