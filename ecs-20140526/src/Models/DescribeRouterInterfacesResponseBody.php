<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeRouterInterfacesResponseBody\routerInterfaceSet;
use AlibabaCloud\Tea\Model;

class DescribeRouterInterfacesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var routerInterfaceSet[]
     */
    public $routerInterfaceSet;
    protected $_name = [
        'totalCount'         => 'TotalCount',
        'requestId'          => 'RequestId',
        'pageSize'           => 'PageSize',
        'pageNumber'         => 'PageNumber',
        'routerInterfaceSet' => 'RouterInterfaceSet',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->routerInterfaceSet) {
            $res['RouterInterfaceSet'] = [];
            if (null !== $this->routerInterfaceSet && \is_array($this->routerInterfaceSet)) {
                $n = 0;
                foreach ($this->routerInterfaceSet as $item) {
                    $res['RouterInterfaceSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouterInterfacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RouterInterfaceSet'])) {
            if (!empty($map['RouterInterfaceSet'])) {
                $model->routerInterfaceSet = [];
                $n                         = 0;
                foreach ($map['RouterInterfaceSet'] as $item) {
                    $model->routerInterfaceSet[$n++] = null !== $item ? routerInterfaceSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
