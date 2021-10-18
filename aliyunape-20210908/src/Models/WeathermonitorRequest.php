<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class WeathermonitorRequest extends Model
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
     * @description 页面条数
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 气象实况时间 yyyymmddhh0000 （数据最小时间2021-08-16）（小时）	20210817120000
     *
     * @var string
     */
    public $curHour;

    /**
     * @description 页码
     *
     * @var int
     */
    public $pageNum;
    protected $_name = [
        'userId'    => 'UserId',
        'orderId'   => 'OrderId',
        'requestId' => 'RequestId',
        'pageSize'  => 'PageSize',
        'curHour'   => 'CurHour',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->curHour) {
            $res['CurHour'] = $this->curHour;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WeathermonitorRequest
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurHour'])) {
            $model->curHour = $map['CurHour'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        return $model;
    }
}
