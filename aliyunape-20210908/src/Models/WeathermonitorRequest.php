<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliyunape\V20210908\Models;

use AlibabaCloud\Tea\Model;

class WeathermonitorRequest extends Model
{
    /**
     * @description 气象实况时间 yyyymmddhh0000 （数据最小时间2021-08-16）（小时）	20210817120000
     *
     * @var string
     */
    public $curHour;

    /**
     * @description 用户中心--我的订单--订单请求--实例名称：aliyunape_meteor12_public_cn-0ju2d2hh90b
     *
     * @var string
     */
    public $orderId;

    /**
     * @description 页码
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description 页面条数
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'curHour'  => 'CurHour',
        'orderId'  => 'OrderId',
        'pageNum'  => 'PageNum',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->curHour) {
            $res['CurHour'] = $this->curHour;
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
        if (isset($map['CurHour'])) {
            $model->curHour = $map['CurHour'];
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

        return $model;
    }
}
