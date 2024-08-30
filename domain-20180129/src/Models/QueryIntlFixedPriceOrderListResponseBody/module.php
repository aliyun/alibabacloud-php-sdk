<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryIntlFixedPriceOrderListResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example T2023110718483800****
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 1557037855000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 11
     *
     * @var int
     */
    public $orderType;

    /**
     * @example 20.00
     *
     * @var int
     */
    public $price;

    /**
     * @example 6
     *
     * @var int
     */
    public $status;

    /**
     * @example 1557037855000
     *
     * @var int
     */
    public $updateTime;

    /**
     * @example 155703785****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizId'      => 'BizId',
        'createTime' => 'CreateTime',
        'domain'     => 'Domain',
        'orderType'  => 'OrderType',
        'price'      => 'Price',
        'status'     => 'Status',
        'updateTime' => 'UpdateTime',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
