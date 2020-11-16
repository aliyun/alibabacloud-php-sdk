<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFilesResponse\recordIndexInfoList;
use AlibabaCloud\Tea\Model;

class DescribeLiveStreamRecordIndexFilesResponse extends Model
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
     * @var recordIndexInfoList
     */
    public $recordIndexInfoList;
    protected $_name = [
        'requestId'           => 'RequestId',
        'pageNum'             => 'PageNum',
        'pageSize'            => 'PageSize',
        'order'               => 'Order',
        'totalNum'            => 'TotalNum',
        'totalPage'           => 'TotalPage',
        'recordIndexInfoList' => 'RecordIndexInfoList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('order', $this->order, true);
        Model::validateRequired('totalNum', $this->totalNum, true);
        Model::validateRequired('totalPage', $this->totalPage, true);
        Model::validateRequired('recordIndexInfoList', $this->recordIndexInfoList, true);
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
        if (null !== $this->recordIndexInfoList) {
            $res['RecordIndexInfoList'] = null !== $this->recordIndexInfoList ? $this->recordIndexInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamRecordIndexFilesResponse
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
        if (isset($map['RecordIndexInfoList'])) {
            $model->recordIndexInfoList = recordIndexInfoList::fromMap($map['RecordIndexInfoList']);
        }

        return $model;
    }
}
