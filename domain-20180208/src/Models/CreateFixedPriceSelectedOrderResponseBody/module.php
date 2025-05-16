<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\CreateFixedPriceSelectedOrderResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string[]
     */
    public $domainBlockTrade;

    /**
     * @var string
     */
    public $orderNo;

    /**
     * @var int
     */
    public $price;
    protected $_name = [
        'domain' => 'Domain',
        'domainBlockTrade' => 'DomainBlockTrade',
        'orderNo' => 'OrderNo',
        'price' => 'Price',
    ];

    public function validate()
    {
        if (\is_array($this->domainBlockTrade)) {
            Model::validateArray($this->domainBlockTrade);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->domainBlockTrade) {
            if (\is_array($this->domainBlockTrade)) {
                $res['DomainBlockTrade'] = [];
                $n1 = 0;
                foreach ($this->domainBlockTrade as $item1) {
                    $res['DomainBlockTrade'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->orderNo) {
            $res['OrderNo'] = $this->orderNo;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['DomainBlockTrade'])) {
            if (!empty($map['DomainBlockTrade'])) {
                $model->domainBlockTrade = [];
                $n1 = 0;
                foreach ($map['DomainBlockTrade'] as $item1) {
                    $model->domainBlockTrade[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OrderNo'])) {
            $model->orderNo = $map['OrderNo'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        return $model;
    }
}
