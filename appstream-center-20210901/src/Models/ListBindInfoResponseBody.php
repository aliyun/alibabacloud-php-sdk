<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBindInfoResponseBody\bindInfoModels;
use AlibabaCloud\Tea\Model;

class ListBindInfoResponseBody extends Model
{
    /**
     * @var bindInfoModels[]
     */
    public $bindInfoModels;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example AD2D0761-1FE5-549D-B169-D3F8D19C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bindInfoModels' => 'BindInfoModels',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindInfoModels) {
            $res['BindInfoModels'] = [];
            if (null !== $this->bindInfoModels && \is_array($this->bindInfoModels)) {
                $n = 0;
                foreach ($this->bindInfoModels as $item) {
                    $res['BindInfoModels'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListBindInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindInfoModels'])) {
            if (!empty($map['BindInfoModels'])) {
                $model->bindInfoModels = [];
                $n = 0;
                foreach ($map['BindInfoModels'] as $item) {
                    $model->bindInfoModels[$n++] = null !== $item ? bindInfoModels::fromMap($item) : $item;
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
