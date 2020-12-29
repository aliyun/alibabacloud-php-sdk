<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries;
use AlibabaCloud\Tea\Model;

class DescribeCenRegionDomainRouteEntriesResponseBody extends Model
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
     * @var cenRouteEntries[]
     */
    public $cenRouteEntries;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'pageNumber'      => 'PageNumber',
        'cenRouteEntries' => 'CenRouteEntries',
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
        if (null !== $this->cenRouteEntries) {
            $res['CenRouteEntries'] = [];
            if (null !== $this->cenRouteEntries && \is_array($this->cenRouteEntries)) {
                $n = 0;
                foreach ($this->cenRouteEntries as $item) {
                    $res['CenRouteEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenRegionDomainRouteEntriesResponseBody
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
        if (isset($map['CenRouteEntries'])) {
            if (!empty($map['CenRouteEntries'])) {
                $model->cenRouteEntries = [];
                $n                      = 0;
                foreach ($map['CenRouteEntries'] as $item) {
                    $model->cenRouteEntries[$n++] = null !== $item ? cenRouteEntries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
