<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class Shop extends Model
{
    /**
     * @var CooperationShop[]
     */
    public $cooperationShops;

    /**
     * @var string
     */
    public $distributorId;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $purchaserId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $shopId;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var string
     */
    public $shopType;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cooperationShops' => 'cooperationShops',
        'distributorId' => 'distributorId',
        'endDate' => 'endDate',
        'purchaserId' => 'purchaserId',
        'requestId' => 'requestId',
        'shopId' => 'shopId',
        'shopName' => 'shopName',
        'shopType' => 'shopType',
        'startDate' => 'startDate',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->cooperationShops)) {
            Model::validateArray($this->cooperationShops);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cooperationShops) {
            if (\is_array($this->cooperationShops)) {
                $res['cooperationShops'] = [];
                $n1 = 0;
                foreach ($this->cooperationShops as $item1) {
                    $res['cooperationShops'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cooperationShops'])) {
            if (!empty($map['cooperationShops'])) {
                $model->cooperationShops = [];
                $n1 = 0;
                foreach ($map['cooperationShops'] as $item1) {
                    $model->cooperationShops[$n1++] = CooperationShop::fromMap($item1);
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
