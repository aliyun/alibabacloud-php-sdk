<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotConfigResponseBody\liveStreamSnapshotConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLiveSnapshotConfigResponseBody extends Model
{
    /**
     * @description The snapshot configurations.
     *
     * @var liveStreamSnapshotConfigList
     */
    public $liveStreamSnapshotConfigList;

    /**
     * @description The sort order.
     *
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page.
     *
     * @example 11
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example A3136B58-5876-4168-83CA-B562781981A0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries that meet the specified conditions.
     *
     * @example 6
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description The total number of pages.
     *
     * @example 10
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'liveStreamSnapshotConfigList' => 'LiveStreamSnapshotConfigList',
        'order' => 'Order',
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
        if (null !== $this->liveStreamSnapshotConfigList) {
            $res['LiveStreamSnapshotConfigList'] = null !== $this->liveStreamSnapshotConfigList ? $this->liveStreamSnapshotConfigList->toMap() : null;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
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
     * @return DescribeLiveSnapshotConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveStreamSnapshotConfigList'])) {
            $model->liveStreamSnapshotConfigList = liveStreamSnapshotConfigList::fromMap($map['LiveStreamSnapshotConfigList']);
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
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
