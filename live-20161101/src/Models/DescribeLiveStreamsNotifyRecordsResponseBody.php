<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamsNotifyRecordsResponseBody\notifyRecordsInfo;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamsNotifyRecordsResponseBody extends Model
{
    /**
     * @description The stream ingest callback records.
     *
     * @var notifyRecordsInfo
     */
    public $notifyRecordsInfo;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example F675E4B4-125D-1533-901B-11A724644285
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries that meet the specified conditions.
     *
     * @example 20
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description The total number of pages.
     *
     * @example 20
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'notifyRecordsInfo' => 'NotifyRecordsInfo',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyRecordsInfo) {
            $res['NotifyRecordsInfo'] = null !== $this->notifyRecordsInfo ? $this->notifyRecordsInfo->toMap() : null;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamsNotifyRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyRecordsInfo'])) {
            $model->notifyRecordsInfo = notifyRecordsInfo::fromMap($map['NotifyRecordsInfo']);
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
