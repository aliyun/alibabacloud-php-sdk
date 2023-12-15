<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRoutersResponseBody\transitRouters;
use AlibabaCloud\Tea\Model;

class ListTransitRoutersResponseBody extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 68521297-5FA6-46CB-B4EB-658F1C68C8CC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description A list of transit routers.
     *
     * @var transitRouters[]
     */
    public $transitRouters;
    protected $_name = [
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
        'transitRouters' => 'TransitRouters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->transitRouters) {
            $res['TransitRouters'] = [];
            if (null !== $this->transitRouters && \is_array($this->transitRouters)) {
                $n = 0;
                foreach ($this->transitRouters as $item) {
                    $res['TransitRouters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRoutersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['TransitRouters'])) {
            if (!empty($map['TransitRouters'])) {
                $model->transitRouters = [];
                $n                     = 0;
                foreach ($map['TransitRouters'] as $item) {
                    $model->transitRouters[$n++] = null !== $item ? transitRouters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
