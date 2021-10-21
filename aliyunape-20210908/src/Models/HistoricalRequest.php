<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class HistoricalRequest extends Model
{
    /**
     * @description UserId
     *
     * @var int
     */
    public $userId;

    /**
     * @description 用户中心--我的订单--订单请求--实例名称：aliyunape_meteor12_public_cn-0ju2d2hh90b
     *
     * @var string
     */
    public $orderId;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description station全国（入参单一站点）
     *
     * @var string
     */
    public $station;

    /**
     * @description pageSize是	页面条数
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description startTimeyyyymmddhh0000（当startTime为空时无数据产出，确认是否入参）
     *
     * @var int
     */
    public $startTime;

    /**
     * @description endTimeyyyymmddhh0000 （当endTime为空时无数据产出，确认是否入参）
     *
     * @var int
     */
    public $endTime;

    /**
     * @description pageNum页码数
     *
     * @var int
     */
    public $pageNum;
    protected $_name = [
        'userId'    => 'UserId',
        'orderId'   => 'OrderId',
        'requestId' => 'RequestId',
        'station'   => 'Station',
        'pageSize'  => 'PageSize',
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
        'pageNum'   => 'PageNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->station) {
            $res['Station'] = $this->station;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HistoricalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Station'])) {
            $model->station = $map['Station'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        return $model;
    }
}
