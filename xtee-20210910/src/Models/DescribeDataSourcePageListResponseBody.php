<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeDataSourcePageListResponseBody\resultObject;
use AlibabaCloud\Tea\Model;

class DescribeDataSourcePageListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var resultObject[]
     */
    public $resultObject;

    /**
     * @var int
     */
    public $totalItem;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'requestId'    => 'RequestId',
        'currentPage'  => 'currentPage',
        'pageSize'     => 'pageSize',
        'resultObject' => 'resultObject',
        'totalItem'    => 'totalItem',
        'totalPage'    => 'totalPage',
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
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->resultObject) {
            $res['resultObject'] = [];
            if (null !== $this->resultObject && \is_array($this->resultObject)) {
                $n = 0;
                foreach ($this->resultObject as $item) {
                    $res['resultObject'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeDataSourcePageListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['resultObject'])) {
            if (!empty($map['resultObject'])) {
                $model->resultObject = [];
                $n                   = 0;
                foreach ($map['resultObject'] as $item) {
                    $model->resultObject[$n++] = null !== $item ? resultObject::fromMap($item) : $item;
                }
            }
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
