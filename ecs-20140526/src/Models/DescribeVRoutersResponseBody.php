<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponseBody\VRouters;
use AlibabaCloud\Tea\Model;

class DescribeVRoutersResponseBody extends Model
{
    /**
     * @var VRouters[]
     */
    public $VRouters;

    /**
     * @var int
     */
    public $totalCount;

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
    public $pageNumber;
    protected $_name = [
        'VRouters'   => 'VRouters',
        'totalCount' => 'TotalCount',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'pageNumber' => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VRouters) {
            $res['VRouters'] = [];
            if (null !== $this->VRouters && \is_array($this->VRouters)) {
                $n = 0;
                foreach ($this->VRouters as $item) {
                    $res['VRouters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVRoutersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VRouters'])) {
            if (!empty($map['VRouters'])) {
                $model->VRouters = [];
                $n               = 0;
                foreach ($map['VRouters'] as $item) {
                    $model->VRouters[$n++] = null !== $item ? VRouters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
