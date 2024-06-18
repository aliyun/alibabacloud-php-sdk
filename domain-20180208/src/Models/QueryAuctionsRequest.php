<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class QueryAuctionsRequest extends Model
{
    /**
     * @var string
     */
    public $auctionEndTimeOrder;

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

    /**
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statuses;
    protected $_name = [
        'auctionEndTimeOrder' => 'AuctionEndTimeOrder',
        'currentPage'         => 'CurrentPage',
        'pageSize'            => 'PageSize',
        'status'              => 'Status',
        'statuses'            => 'Statuses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auctionEndTimeOrder) {
            $res['AuctionEndTimeOrder'] = $this->auctionEndTimeOrder;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAuctionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuctionEndTimeOrder'])) {
            $model->auctionEndTimeOrder = $map['AuctionEndTimeOrder'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Statuses'])) {
            $model->statuses = $map['Statuses'];
        }

        return $model;
    }
}
