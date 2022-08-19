<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVcoRouteEntriesResponseBody\vcoRouteEntries;
use AlibabaCloud\Tea\Model;

class DescribeVcoRouteEntriesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

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
    public $totalCount;

    /**
     * @var vcoRouteEntries[]
     */
    public $vcoRouteEntries;
    protected $_name = [
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'vcoRouteEntries' => 'VcoRouteEntries',
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
        if (null !== $this->vcoRouteEntries) {
            $res['VcoRouteEntries'] = [];
            if (null !== $this->vcoRouteEntries && \is_array($this->vcoRouteEntries)) {
                $n = 0;
                foreach ($this->vcoRouteEntries as $item) {
                    $res['VcoRouteEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVcoRouteEntriesResponseBody
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
        if (isset($map['VcoRouteEntries'])) {
            if (!empty($map['VcoRouteEntries'])) {
                $model->vcoRouteEntries = [];
                $n                      = 0;
                foreach ($map['VcoRouteEntries'] as $item) {
                    $model->vcoRouteEntries[$n++] = null !== $item ? vcoRouteEntries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
