<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryCarProcessEventsRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $actionType;

    /**
     * @example 1
     *
     * @var int
     */
    public $areaIndex;

    /**
     * @example 1646288487368
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 1646288488368
     *
     * @var int
     */
    public $endTime;

    /**
     * @example iotx-oxsshare****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $plateNo;

    /**
     * @example car_test
     *
     * @var string
     */
    public $subDeviceName;

    /**
     * @example ImP6ECd1aQ****CAfWTO000101
     *
     * @var string
     */
    public $subIotId;

    /**
     * @example a1Duh0F****
     *
     * @var string
     */
    public $subProductKey;
    protected $_name = [
        'actionType'    => 'ActionType',
        'areaIndex'     => 'AreaIndex',
        'beginTime'     => 'BeginTime',
        'currentPage'   => 'CurrentPage',
        'endTime'       => 'EndTime',
        'iotInstanceId' => 'IotInstanceId',
        'pageSize'      => 'PageSize',
        'plateNo'       => 'PlateNo',
        'subDeviceName' => 'SubDeviceName',
        'subIotId'      => 'SubIotId',
        'subProductKey' => 'SubProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->areaIndex) {
            $res['AreaIndex'] = $this->areaIndex;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->plateNo) {
            $res['PlateNo'] = $this->plateNo;
        }
        if (null !== $this->subDeviceName) {
            $res['SubDeviceName'] = $this->subDeviceName;
        }
        if (null !== $this->subIotId) {
            $res['SubIotId'] = $this->subIotId;
        }
        if (null !== $this->subProductKey) {
            $res['SubProductKey'] = $this->subProductKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCarProcessEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['AreaIndex'])) {
            $model->areaIndex = $map['AreaIndex'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PlateNo'])) {
            $model->plateNo = $map['PlateNo'];
        }
        if (isset($map['SubDeviceName'])) {
            $model->subDeviceName = $map['SubDeviceName'];
        }
        if (isset($map['SubIotId'])) {
            $model->subIotId = $map['SubIotId'];
        }
        if (isset($map['SubProductKey'])) {
            $model->subProductKey = $map['SubProductKey'];
        }

        return $model;
    }
}
