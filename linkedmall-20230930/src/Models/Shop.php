<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class Shop extends Model
{
    /**
     * @example 12***01
     *
     * @var CooperationShop[]
     */
    public $cooperationShops;

    /**
     * @example 12****09
     *
     * @var string
     */
    public $distributorId;

    /**
     * @example 2024-09-09 00:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @example PID56****2304
     *
     * @var string
     */
    public $purchaserId;

    /**
     * @example 48A34399-A72C-1E23-8388-7E63****E927
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 22****09
     *
     * @var string
     */
    public $shopId;

    /**
     * @example 儿童分销店铺
     *
     * @var string
     */
    public $shopName;

    /**
     * @example DistributorQYG
     *
     * @var string
     */
    public $shopType;

    /**
     * @example 2023-09-09 00:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @example Working
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cooperationShops' => 'cooperationShops',
        'distributorId'    => 'distributorId',
        'endDate'          => 'endDate',
        'purchaserId'      => 'purchaserId',
        'requestId'        => 'requestId',
        'shopId'           => 'shopId',
        'shopName'         => 'shopName',
        'shopType'         => 'shopType',
        'startDate'        => 'startDate',
        'status'           => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cooperationShops) {
            $res['cooperationShops'] = [];
            if (null !== $this->cooperationShops && \is_array($this->cooperationShops)) {
                $n = 0;
                foreach ($this->cooperationShops as $item) {
                    $res['cooperationShops'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->distributorId) {
            $res['distributorId'] = $this->distributorId;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->purchaserId) {
            $res['purchaserId'] = $this->purchaserId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
        }
        if (null !== $this->shopName) {
            $res['shopName'] = $this->shopName;
        }
        if (null !== $this->shopType) {
            $res['shopType'] = $this->shopType;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Shop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cooperationShops'])) {
            if (!empty($map['cooperationShops'])) {
                $model->cooperationShops = [];
                $n                       = 0;
                foreach ($map['cooperationShops'] as $item) {
                    $model->cooperationShops[$n++] = null !== $item ? CooperationShop::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['distributorId'])) {
            $model->distributorId = $map['distributorId'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['purchaserId'])) {
            $model->purchaserId = $map['purchaserId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }
        if (isset($map['shopName'])) {
            $model->shopName = $map['shopName'];
        }
        if (isset($map['shopType'])) {
            $model->shopType = $map['shopType'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
