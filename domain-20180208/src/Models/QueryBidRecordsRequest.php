<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class QueryBidRecordsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var string
     */
    public $auctionId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'auctionId'   => 'AuctionId',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryBidRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuctionId'])) {
            $model->auctionId = $map['AuctionId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
