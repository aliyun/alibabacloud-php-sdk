<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeServiceConsumeResponseBody\consumeRecords;
use AlibabaCloud\Tea\Model;

class DescribeServiceConsumeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var consumeRecords[]
     */
    public $consumeRecords;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalItem;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'requestId'      => 'RequestId',
        'consumeRecords' => 'consumeRecords',
        'currentPage'    => 'currentPage',
        'pageSize'       => 'pageSize',
        'totalItem'      => 'totalItem',
        'totalPage'      => 'totalPage',
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
        if (null !== $this->consumeRecords) {
            $res['consumeRecords'] = [];
            if (null !== $this->consumeRecords && \is_array($this->consumeRecords)) {
                $n = 0;
                foreach ($this->consumeRecords as $item) {
                    $res['consumeRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->totalItem) {
            $res['totalItem'] = $this->totalItem;
        }
        if (null !== $this->totalPage) {
            $res['totalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceConsumeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['consumeRecords'])) {
            if (!empty($map['consumeRecords'])) {
                $model->consumeRecords = [];
                $n                     = 0;
                foreach ($map['consumeRecords'] as $item) {
                    $model->consumeRecords[$n++] = null !== $item ? consumeRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['totalItem'])) {
            $model->totalItem = $map['totalItem'];
        }
        if (isset($map['totalPage'])) {
            $model->totalPage = $map['totalPage'];
        }

        return $model;
    }
}
