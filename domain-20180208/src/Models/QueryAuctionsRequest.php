<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class QueryAuctionsRequest extends Model
{
    /**
     * @var string
     */
    public $auctionEndTimeOrder;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statuses;
    protected $_name = [
        'auctionEndTimeOrder' => 'AuctionEndTimeOrder',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'status' => 'Status',
        'statuses' => 'Statuses',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
