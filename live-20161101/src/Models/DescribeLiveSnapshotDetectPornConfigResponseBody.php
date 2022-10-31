<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotDetectPornConfigResponseBody\liveSnapshotDetectPornConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLiveSnapshotDetectPornConfigResponseBody extends Model
{
    /**
     * @var liveSnapshotDetectPornConfigList
     */
    public $liveSnapshotDetectPornConfigList;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $pageNum;

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
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'liveSnapshotDetectPornConfigList' => 'LiveSnapshotDetectPornConfigList',
        'order'                            => 'Order',
        'pageNum'                          => 'PageNum',
        'pageSize'                         => 'PageSize',
        'requestId'                        => 'RequestId',
        'totalNum'                         => 'TotalNum',
        'totalPage'                        => 'TotalPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveSnapshotDetectPornConfigList) {
            $res['LiveSnapshotDetectPornConfigList'] = null !== $this->liveSnapshotDetectPornConfigList ? $this->liveSnapshotDetectPornConfigList->toMap() : null;
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
     * @return DescribeLiveSnapshotDetectPornConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveSnapshotDetectPornConfigList'])) {
            $model->liveSnapshotDetectPornConfigList = liveSnapshotDetectPornConfigList::fromMap($map['LiveSnapshotDetectPornConfigList']);
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
