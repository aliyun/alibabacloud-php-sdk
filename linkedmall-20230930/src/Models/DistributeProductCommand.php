<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DistributeProductCommand extends Model
{
    /**
     * @var string
     */
    public $lmShopId;
    /**
     * @var DistributionProduct[]
     */
    public $products;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $requestTime;
    /**
     * @var string
     */
    public $requestUser;
    protected $_name = [
        'lmShopId'    => 'lmShopId',
        'products'    => 'products',
        'requestId'   => 'requestId',
        'requestTime' => 'requestTime',
        'requestUser' => 'requestUser',
    ];

    public function validate()
    {
        if (\is_array($this->products)) {
            Model::validateArray($this->products);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lmShopId) {
            $res['lmShopId'] = $this->lmShopId;
        }

        if (null !== $this->products) {
            if (\is_array($this->products)) {
                $res['products'] = [];
                $n1              = 0;
                foreach ($this->products as $item1) {
                    $res['products'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->requestTime) {
            $res['requestTime'] = $this->requestTime;
        }

        if (null !== $this->requestUser) {
            $res['requestUser'] = $this->requestUser;
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
        if (isset($map['lmShopId'])) {
            $model->lmShopId = $map['lmShopId'];
        }

        if (isset($map['products'])) {
            if (!empty($map['products'])) {
                $model->products = [];
                $n1              = 0;
                foreach ($map['products'] as $item1) {
                    $model->products[$n1++] = DistributionProduct::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['requestTime'])) {
            $model->requestTime = $map['requestTime'];
        }

        if (isset($map['requestUser'])) {
            $model->requestUser = $map['requestUser'];
        }

        return $model;
    }
}
