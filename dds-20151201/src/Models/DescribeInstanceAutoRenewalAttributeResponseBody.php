<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeInstanceAutoRenewalAttributeResponseBody\items;

class DescribeInstanceAutoRenewalAttributeResponseBody extends Model
{
    /**
     * @var items
     */
    public $items;

    /**
     * @var int
     */
    public $itemsNumbers;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'items' => 'Items',
        'itemsNumbers' => 'ItemsNumbers',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->items) {
            $this->items->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toArray($noStream) : $this->items;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
