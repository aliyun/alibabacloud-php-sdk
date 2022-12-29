<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeInstanceAutoRenewalAttributeResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeInstanceAutoRenewalAttributeResponseBody extends Model
{
    /**
     * @description Details about returned entries.
     *
     * @var items
     */
    public $items;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $itemsNumbers;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries that were returned on the current page.
     *
     * @example 2
     *
     * @var int
     */
    public $pageRecordCount;

    /**
     * @description The ID of the request.
     *
     * @example FAB5CB3B-DB9D-473A-9DF1-F57B6B9CB949
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'items'           => 'Items',
        'itemsNumbers'    => 'ItemsNumbers',
        'pageNumber'      => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->itemsNumbers) {
            $res['ItemsNumbers'] = $this->itemsNumbers;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceAutoRenewalAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['ItemsNumbers'])) {
            $model->itemsNumbers = $map['ItemsNumbers'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
