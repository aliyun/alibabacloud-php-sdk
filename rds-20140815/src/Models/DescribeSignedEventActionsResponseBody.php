<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSignedEventActionsResponseBody\eventItems;
use AlibabaCloud\Tea\Model;

class DescribeSignedEventActionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $nextPageEventId;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var bool
     */
    public $fromBegin;

    /**
     * @var bool
     */
    public $toEnd;

    /**
     * @var eventItems
     */
    public $eventItems;
    protected $_name = [
        'requestId'       => 'RequestId',
        'nextPageEventId' => 'NextPageEventId',
        'pageRecordCount' => 'PageRecordCount',
        'fromBegin'       => 'FromBegin',
        'toEnd'           => 'ToEnd',
        'eventItems'      => 'EventItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextPageEventId) {
            $res['NextPageEventId'] = $this->nextPageEventId;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->fromBegin) {
            $res['FromBegin'] = $this->fromBegin;
        }
        if (null !== $this->toEnd) {
            $res['ToEnd'] = $this->toEnd;
        }
        if (null !== $this->eventItems) {
            $res['EventItems'] = null !== $this->eventItems ? $this->eventItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSignedEventActionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextPageEventId'])) {
            $model->nextPageEventId = $map['NextPageEventId'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['FromBegin'])) {
            $model->fromBegin = $map['FromBegin'];
        }
        if (isset($map['ToEnd'])) {
            $model->toEnd = $map['ToEnd'];
        }
        if (isset($map['EventItems'])) {
            $model->eventItems = eventItems::fromMap($map['EventItems']);
        }

        return $model;
    }
}
