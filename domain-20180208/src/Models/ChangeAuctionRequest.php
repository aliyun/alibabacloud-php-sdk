<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180208\Models\ChangeAuctionRequest\auctionList;

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
        if (\is_array($this->auctionList)) {
            Model::validateArray($this->auctionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auctionList) {
            if (\is_array($this->auctionList)) {
                $res['AuctionList'] = [];
                $n1 = 0;
                foreach ($this->auctionList as $item1) {
                    $res['AuctionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AuctionList'])) {
            if (!empty($map['AuctionList'])) {
                $model->auctionList = [];
                $n1 = 0;
                foreach ($map['AuctionList'] as $item1) {
                    $model->auctionList[$n1] = auctionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
