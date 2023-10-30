<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models;

use AlibabaCloud\SDK\Foasconsole\V20190601\Models\DescribeNamespacesResponseBody\namespaces;
use AlibabaCloud\Tea\Model;

class DescribeNamespacesResponseBody extends Model
{
    /**
     * @var namespaces[]
     */
    public $namespaces;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 67F33190-946B-1105-B6A1-E2DF0426DD51
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 15
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'namespaces' => 'Namespaces',
        'pageIndex'  => 'PageIndex',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'totalCount' => 'TotalCount',
        'totalPage'  => 'TotalPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaces) {
            $res['Namespaces'] = [];
            if (null !== $this->namespaces && \is_array($this->namespaces)) {
                $n = 0;
                foreach ($this->namespaces as $item) {
                    $res['Namespaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNamespacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = [];
                $n                 = 0;
                foreach ($map['Namespaces'] as $item) {
                    $model->namespaces[$n++] = null !== $item ? namespaces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
