<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotConfigResponseBody\liveStreamSnapshotConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLiveSnapshotConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var liveStreamSnapshotConfigList
     */
    public $liveStreamSnapshotConfigList;
    protected $_name = [
        'order'                        => 'Order',
        'totalNum'                     => 'TotalNum',
        'pageNum'                      => 'PageNum',
        'requestId'                    => 'RequestId',
        'totalPage'                    => 'TotalPage',
        'pageSize'                     => 'PageSize',
        'liveStreamSnapshotConfigList' => 'LiveStreamSnapshotConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->liveStreamSnapshotConfigList) {
            $res['LiveStreamSnapshotConfigList'] = null !== $this->liveStreamSnapshotConfigList ? $this->liveStreamSnapshotConfigList->toMap() : null;
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
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['LiveStreamSnapshotConfigList'])) {
            $model->liveStreamSnapshotConfigList = liveStreamSnapshotConfigList::fromMap($map['LiveStreamSnapshotConfigList']);
        }

        return $model;
    }
}
