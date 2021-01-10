<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\SDK\Ivision\V20190308\Models\DescribeStreamPredictResultResponseBody\streamPredictDatas;
use AlibabaCloud\Tea\Model;

class DescribeStreamPredictResultResponseBody extends Model
{
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
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var streamPredictDatas[]
     */
    public $streamPredictDatas;
    protected $_name = [
        'requestId'          => 'RequestId',
        'totalNum'           => 'TotalNum',
        'currentPage'        => 'CurrentPage',
        'pageSize'           => 'PageSize',
        'nextPageToken'      => 'NextPageToken',
        'streamPredictDatas' => 'StreamPredictDatas',
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
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->streamPredictDatas) {
            $res['StreamPredictDatas'] = [];
            if (null !== $this->streamPredictDatas && \is_array($this->streamPredictDatas)) {
                $n = 0;
                foreach ($this->streamPredictDatas as $item) {
                    $res['StreamPredictDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStreamPredictResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['StreamPredictDatas'])) {
            if (!empty($map['StreamPredictDatas'])) {
                $model->streamPredictDatas = [];
                $n                         = 0;
                foreach ($map['StreamPredictDatas'] as $item) {
                    $model->streamPredictDatas[$n++] = null !== $item ? streamPredictDatas::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
