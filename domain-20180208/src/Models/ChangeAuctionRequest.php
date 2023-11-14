<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\SDK\Domain\V20180208\Models\ChangeAuctionRequest\auctionList;
use AlibabaCloud\Tea\Model;

class ChangeAuctionRequest extends Model
{
    /**
     * @var auctionList[]
     */
    public $auctionList;
    protected $_name = [
        'auctionList' => 'AuctionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auctionList) {
            $res['AuctionList'] = [];
            if (null !== $this->auctionList && \is_array($this->auctionList)) {
                $n = 0;
                foreach ($this->auctionList as $item) {
                    $res['AuctionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeAuctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuctionList'])) {
            if (!empty($map['AuctionList'])) {
                $model->auctionList = [];
                $n                  = 0;
                foreach ($map['AuctionList'] as $item) {
                    $model->auctionList[$n++] = null !== $item ? auctionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
