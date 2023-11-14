<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class QueryAuctionDetailRequest extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $auctionId;
    protected $_name = [
        'auctionId' => 'AuctionId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAuctionDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuctionId'])) {
            $model->auctionId = $map['AuctionId'];
        }

        return $model;
    }
}
