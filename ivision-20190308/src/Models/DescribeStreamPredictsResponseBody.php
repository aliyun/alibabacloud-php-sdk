<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\SDK\Ivision\V20190308\Models\DescribeStreamPredictsResponseBody\streamPredicts;
use AlibabaCloud\Tea\Model;

class DescribeStreamPredictsResponseBody extends Model
{
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

    /**
     * @var streamPredicts[]
     */
    public $streamPredicts;
    protected $_name = [
        'totalNum'       => 'TotalNum',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'currentPage'    => 'CurrentPage',
        'nextPageToken'  => 'NextPageToken',
        'streamPredicts' => 'StreamPredicts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->streamPredicts) {
            $res['StreamPredicts'] = [];
            if (null !== $this->streamPredicts && \is_array($this->streamPredicts)) {
                $n = 0;
                foreach ($this->streamPredicts as $item) {
                    $res['StreamPredicts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStreamPredictsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['StreamPredicts'])) {
            if (!empty($map['StreamPredicts'])) {
                $model->streamPredicts = [];
                $n                     = 0;
                foreach ($map['StreamPredicts'] as $item) {
                    $model->streamPredicts[$n++] = null !== $item ? streamPredicts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
