<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\SDK\Trademark\V20190902\Models\ListTrademarkSearchForInnerResponseBody\trademarkSearchContents;
use AlibabaCloud\Tea\Model;

class ListTrademarkSearchForInnerResponseBody extends Model
{
    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $products;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var trademarkSearchContents[]
     */
    public $trademarkSearchContents;
    protected $_name = [
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'products'                => 'Products',
        'requestId'               => 'RequestId',
        'totalCount'              => 'TotalCount',
        'trademarkSearchContents' => 'TrademarkSearchContents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->products) {
            $res['Products'] = $this->products;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->trademarkSearchContents) {
            $res['TrademarkSearchContents'] = [];
            if (null !== $this->trademarkSearchContents && \is_array($this->trademarkSearchContents)) {
                $n = 0;
                foreach ($this->trademarkSearchContents as $item) {
                    $res['TrademarkSearchContents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrademarkSearchForInnerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Products'])) {
            if (!empty($map['Products'])) {
                $model->products = $map['Products'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TrademarkSearchContents'])) {
            if (!empty($map['TrademarkSearchContents'])) {
                $model->trademarkSearchContents = [];
                $n                              = 0;
                foreach ($map['TrademarkSearchContents'] as $item) {
                    $model->trademarkSearchContents[$n++] = null !== $item ? trademarkSearchContents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
