<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteServicesInCenResponseBody\routeServiceEntries;
use AlibabaCloud\Tea\Model;

class DescribeRouteServicesInCenResponseBody extends Model
{
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

    /**
     * @var routeServiceEntries[]
     */
    public $routeServiceEntries;
    protected $_name = [
        'totalCount'          => 'TotalCount',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'pageNumber'          => 'PageNumber',
        'routeServiceEntries' => 'RouteServiceEntries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->routeServiceEntries) {
            $res['RouteServiceEntries'] = [];
            if (null !== $this->routeServiceEntries && \is_array($this->routeServiceEntries)) {
                $n = 0;
                foreach ($this->routeServiceEntries as $item) {
                    $res['RouteServiceEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouteServicesInCenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RouteServiceEntries'])) {
            if (!empty($map['RouteServiceEntries'])) {
                $model->routeServiceEntries = [];
                $n                          = 0;
                foreach ($map['RouteServiceEntries'] as $item) {
                    $model->routeServiceEntries[$n++] = null !== $item ? routeServiceEntries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
