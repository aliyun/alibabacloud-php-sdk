<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceMissingIndexListRequest extends Model
{
    /**
     * @var string
     */
    public $avgTotalUserCost;
    /**
     * @var string
     */
    public $avgUserImpact;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $indexCount;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $objectName;
    /**
     * @var string
     */
    public $pageNo;
    /**
     * @var string
     */
    public $pageSize;
    /**
     * @var string
     */
    public $reservedPages;
    /**
     * @var string
     */
    public $reservedSize;
    /**
     * @var string
     */
    public $rowCount;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $uniqueCompiles;
    /**
     * @var string
     */
    public $userScans;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
