<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceMissingIndexListRequest extends Model
{
    /**
     * @description The query condition based on the average cost savings.
     *
     * @example <=|8
     *
     * @var string
     */
    public $avgTotalUserCost;

    /**
     * @description The query condition based on the performance improvement.
     *
     * @example >|10000
     *
     * @var string
     */
    public $avgUserImpact;

    /**
     * @description The end time of the last seek.
     *
     * @example 1681869544000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The query condition based on the number of indexes.
     *
     * @example >=|8
     *
     * @var string
     */
    public $indexCount;

    /**
     * @description The database instance ID.
     *
     * This parameter is required.
     * @example rm-************
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The object name.
     *
     * @example bas_customer
     *
     * @var string
     */
    public $objectName;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The query condition based on the total number of pages.
     *
     * @example >=|100
     *
     * @var string
     */
    public $reservedPages;

    /**
     * @description The query condition based on the table size.
     *
     * @example >=|100
     *
     * @var string
     */
    public $reservedSize;

    /**
     * @description The query condition based on the number of table rows.
     *
     * @example >=|100000
     *
     * @var string
     */
    public $rowCount;

    /**
     * @description The start time of the last seek.
     *
     * @example 1679414400000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The query condition based on the number of compilations.
     *
     * @example >=|10000
     *
     * @var string
     */
    public $uniqueCompiles;

    /**
     * @description The query condition based on the number of scans.
     *
     * @example >=|10000
     *
     * @var string
     */
    public $userScans;

    /**
     * @description The query condition based on the number of seeks.
     *
     * @example >=|1000
     *
     * @var string
     */
    public $userSeeks;
    protected $_name = [
        'avgTotalUserCost' => 'AvgTotalUserCost',
        'avgUserImpact'    => 'AvgUserImpact',
        'endTime'          => 'EndTime',
        'indexCount'       => 'IndexCount',
        'instanceId'       => 'InstanceId',
        'objectName'       => 'ObjectName',
        'pageNo'           => 'PageNo',
        'pageSize'         => 'PageSize',
        'reservedPages'    => 'ReservedPages',
        'reservedSize'     => 'ReservedSize',
        'rowCount'         => 'RowCount',
        'startTime'        => 'StartTime',
        'uniqueCompiles'   => 'UniqueCompiles',
        'userScans'        => 'UserScans',
        'userSeeks'        => 'UserSeeks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgTotalUserCost) {
            $res['AvgTotalUserCost'] = $this->avgTotalUserCost;
        }
        if (null !== $this->avgUserImpact) {
            $res['AvgUserImpact'] = $this->avgUserImpact;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->indexCount) {
            $res['IndexCount'] = $this->indexCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reservedPages) {
            $res['ReservedPages'] = $this->reservedPages;
        }
        if (null !== $this->reservedSize) {
            $res['ReservedSize'] = $this->reservedSize;
        }
        if (null !== $this->rowCount) {
            $res['RowCount'] = $this->rowCount;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->uniqueCompiles) {
            $res['UniqueCompiles'] = $this->uniqueCompiles;
        }
        if (null !== $this->userScans) {
            $res['UserScans'] = $this->userScans;
        }
        if (null !== $this->userSeeks) {
            $res['UserSeeks'] = $this->userSeeks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceMissingIndexListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgTotalUserCost'])) {
            $model->avgTotalUserCost = $map['AvgTotalUserCost'];
        }
        if (isset($map['AvgUserImpact'])) {
            $model->avgUserImpact = $map['AvgUserImpact'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IndexCount'])) {
            $model->indexCount = $map['IndexCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ReservedPages'])) {
            $model->reservedPages = $map['ReservedPages'];
        }
        if (isset($map['ReservedSize'])) {
            $model->reservedSize = $map['ReservedSize'];
        }
        if (isset($map['RowCount'])) {
            $model->rowCount = $map['RowCount'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UniqueCompiles'])) {
            $model->uniqueCompiles = $map['UniqueCompiles'];
        }
        if (isset($map['UserScans'])) {
            $model->userScans = $map['UserScans'];
        }
        if (isset($map['UserSeeks'])) {
            $model->userSeeks = $map['UserSeeks'];
        }

        return $model;
    }
}
