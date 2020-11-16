<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveSnapshotConfigResponse\liveStreamSnapshotConfigList;
use AlibabaCloud\Tea\Model;

class DescribeLiveSnapshotConfigResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

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
    public $order;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var liveStreamSnapshotConfigList
     */
    public $liveStreamSnapshotConfigList;
    protected $_name = [
        'requestId'                    => 'RequestId',
        'pageNum'                      => 'PageNum',
        'pageSize'                     => 'PageSize',
        'order'                        => 'Order',
        'totalNum'                     => 'TotalNum',
        'totalPage'                    => 'TotalPage',
        'liveStreamSnapshotConfigList' => 'LiveStreamSnapshotConfigList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('order', $this->order, true);
        Model::validateRequired('totalNum', $this->totalNum, true);
        Model::validateRequired('totalPage', $this->totalPage, true);
        Model::validateRequired('liveStreamSnapshotConfigList', $this->liveStreamSnapshotConfigList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->liveStreamSnapshotConfigList) {
            $res['LiveStreamSnapshotConfigList'] = null !== $this->liveStreamSnapshotConfigList ? $this->liveStreamSnapshotConfigList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveSnapshotConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['LiveStreamSnapshotConfigList'])) {
            $model->liveStreamSnapshotConfigList = liveStreamSnapshotConfigList::fromMap($map['LiveStreamSnapshotConfigList']);
        }

        return $model;
    }
}
