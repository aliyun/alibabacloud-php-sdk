<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\SDK\Ivision\V20190308\Models\DescribeStreamPredictResultResponseBody\streamPredictDatas;
use AlibabaCloud\Tea\Model;

class DescribeStreamPredictResultResponseBody extends Model
{
    /**
     * @var streamPredictDatas[]
     */
    public $streamPredictDatas;

    /**
     * @var int
     */
    public $totalNum;

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
    public $currentPage;

    /**
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'streamPredictDatas' => 'StreamPredictDatas',
        'totalNum'           => 'TotalNum',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'currentPage'        => 'CurrentPage',
        'nextPageToken'      => 'NextPageToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamPredictDatas) {
            $res['StreamPredictDatas'] = [];
            if (null !== $this->streamPredictDatas && \is_array($this->streamPredictDatas)) {
                $n = 0;
                foreach ($this->streamPredictDatas as $item) {
                    $res['StreamPredictDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
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
        if (isset($map['StreamPredictDatas'])) {
            if (!empty($map['StreamPredictDatas'])) {
                $model->streamPredictDatas = [];
                $n                         = 0;
                foreach ($map['StreamPredictDatas'] as $item) {
                    $model->streamPredictDatas[$n++] = null !== $item ? streamPredictDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        return $model;
    }
}
