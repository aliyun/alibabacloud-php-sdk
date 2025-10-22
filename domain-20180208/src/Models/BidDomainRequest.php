<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class BidDomainRequest extends Model
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
    public $maxBid;
    protected $_name = [
        'auctionId' => 'AuctionId',
        'currency' => 'Currency',
        'maxBid' => 'MaxBid',
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

        if (null !== $this->maxBid) {
            $res['MaxBid'] = $this->maxBid;
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

        if (isset($map['MaxBid'])) {
            $model->maxBid = $map['MaxBid'];
        }

        return $model;
    }
}
