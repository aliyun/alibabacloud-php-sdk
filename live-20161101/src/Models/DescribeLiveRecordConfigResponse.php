<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponse\liveAppRecordList;
use AlibabaCloud\Tea\Model;

class DescribeLiveRecordConfigResponse extends Model
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
     * @var liveAppRecordList
     */
    public $liveAppRecordList;
    protected $_name = [
        'requestId'         => 'RequestId',
        'pageNum'           => 'PageNum',
        'pageSize'          => 'PageSize',
        'order'             => 'Order',
        'totalNum'          => 'TotalNum',
        'totalPage'         => 'TotalPage',
        'liveAppRecordList' => 'LiveAppRecordList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('order', $this->order, true);
        Model::validateRequired('totalNum', $this->totalNum, true);
        Model::validateRequired('totalPage', $this->totalPage, true);
        Model::validateRequired('liveAppRecordList', $this->liveAppRecordList, true);
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
        if (null !== $this->liveAppRecordList) {
            $res['LiveAppRecordList'] = null !== $this->liveAppRecordList ? $this->liveAppRecordList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRecordConfigResponse
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
        if (isset($map['LiveAppRecordList'])) {
            $model->liveAppRecordList = liveAppRecordList::fromMap($map['LiveAppRecordList']);
        }

        return $model;
    }
}
