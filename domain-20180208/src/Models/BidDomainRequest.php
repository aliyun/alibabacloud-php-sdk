<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class BidDomainRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 12345678
     *
     * @var string
     */
    public $auctionId;

    /**
     * @description This parameter is required.
     *
     * @example RMB
     *
     * @var string
     */
    public $currency;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var float
     */
    public $maxBid;
    protected $_name = [
        'auctionId' => 'AuctionId',
        'currency'  => 'Currency',
        'maxBid'    => 'MaxBid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return BidDomainRequest
     */
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
