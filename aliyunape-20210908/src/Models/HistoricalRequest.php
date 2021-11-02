<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class HistoricalRequest extends Model
{
    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 用户中心--我的订单--订单请求--实例名称：aliyunape_meteor12_public_cn-0ju2d2hh90b
     *
     * @var string
     */
    public $orderId;

    /**
     * @description pageNum
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 全国（入参单一站点）
     *
     * @var string
     */
    public $station;
    protected $_name = [
        'endTime'   => 'EndTime',
        'orderId'   => 'OrderId',
        'pageNum'   => 'PageNum',
        'pageSize'  => 'PageSize',
        'startTime' => 'StartTime',
        'station'   => 'Station',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->station) {
            $res['Station'] = $this->station;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Station'])) {
            $model->station = $map['Station'];
        }

        return $model;
    }
}
