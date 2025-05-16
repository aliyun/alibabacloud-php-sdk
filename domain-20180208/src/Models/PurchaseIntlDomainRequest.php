<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class PurchaseIntlDomainRequest extends Model
{
    /**
     * @var string
     */
    public $auctionId;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $price;
    protected $_name = [
        'auctionId' => 'AuctionId',
        'currency' => 'Currency',
        'price' => 'Price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auctionId) {
            $res['AuctionId'] = $this->auctionId;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
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
        if (isset($map['AuctionId'])) {
            $model->auctionId = $map['AuctionId'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        return $model;
    }
}
