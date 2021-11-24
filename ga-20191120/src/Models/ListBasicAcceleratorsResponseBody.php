<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAcceleratorsResponseBody\accelerators;
use AlibabaCloud\Tea\Model;

class ListBasicAcceleratorsResponseBody extends Model
{
    /**
     * @description 全球加速实例列表
     *
     * @var accelerators[]
     */
    public $accelerators;

    /**
     * @description 页码
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 全球加速实例总数
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accelerators' => 'Accelerators',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerators) {
            $res['Accelerators'] = [];
            if (null !== $this->accelerators && \is_array($this->accelerators)) {
                $n = 0;
                foreach ($this->accelerators as $item) {
                    $res['Accelerators'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBasicAcceleratorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accelerators'])) {
            if (!empty($map['Accelerators'])) {
                $model->accelerators = [];
                $n                   = 0;
                foreach ($map['Accelerators'] as $item) {
                    $model->accelerators[$n++] = null !== $item ? accelerators::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
