<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponseBody\eventItems;

class DescribeEventsResponseBody extends Model
{
    /**
     * @var eventItems
     */
    public $eventItems;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'eventItems'       => 'EventItems',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (null !== $this->eventItems) {
            $this->eventItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventItems) {
            $res['EventItems'] = null !== $this->eventItems ? $this->eventItems->toArray($noStream) : $this->eventItems;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['EventItems'])) {
            $model->eventItems = eventItems::fromMap($map['EventItems']);
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
