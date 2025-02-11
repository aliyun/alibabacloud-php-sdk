<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ListResultExportJobHistoryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $databaseUser;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $orderShrink;
    /**
     * @var string
     */
    public $pageNumber;
    /**
     * @var string
     */
    public $pageSize;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroup;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $statusListShrink;
    protected $_name = [
        'DBClusterId'      => 'DBClusterId',
        'databaseUser'     => 'DatabaseUser',
        'endTime'          => 'EndTime',
        'orderShrink'      => 'Order',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'regionId'         => 'RegionId',
        'resourceGroup'    => 'ResourceGroup',
        'startTime'        => 'StartTime',
        'statusListShrink' => 'StatusList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->databaseUser) {
            $res['DatabaseUser'] = $this->databaseUser;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->orderShrink) {
            $res['Order'] = $this->orderShrink;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->statusListShrink) {
            $res['StatusList'] = $this->statusListShrink;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DatabaseUser'])) {
            $model->databaseUser = $map['DatabaseUser'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Order'])) {
            $model->orderShrink = $map['Order'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StatusList'])) {
            $model->statusListShrink = $map['StatusList'];
        }

        return $model;
    }
}
