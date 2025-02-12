<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsResponseBody\purchasedApiGroupAttributes;

class DescribePurchasedApiGroupsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var purchasedApiGroupAttributes
     */
    public $purchasedApiGroupAttributes;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'                  => 'PageNumber',
        'pageSize'                    => 'PageSize',
        'purchasedApiGroupAttributes' => 'PurchasedApiGroupAttributes',
        'requestId'                   => 'RequestId',
        'totalCount'                  => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->purchasedApiGroupAttributes) {
            $this->purchasedApiGroupAttributes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->purchasedApiGroupAttributes) {
            $res['PurchasedApiGroupAttributes'] = null !== $this->purchasedApiGroupAttributes ? $this->purchasedApiGroupAttributes->toArray($noStream) : $this->purchasedApiGroupAttributes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PurchasedApiGroupAttributes'])) {
            $model->purchasedApiGroupAttributes = purchasedApiGroupAttributes::fromMap($map['PurchasedApiGroupAttributes']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
