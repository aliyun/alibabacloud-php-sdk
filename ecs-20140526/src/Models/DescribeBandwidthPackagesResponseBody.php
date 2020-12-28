<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponseBody\bandwidthPackages;
use AlibabaCloud\Tea\Model;

class DescribeBandwidthPackagesResponseBody extends Model
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
     * @var bandwidthPackages[]
     */
    public $bandwidthPackages;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'pageNumber'        => 'PageNumber',
        'bandwidthPackages' => 'BandwidthPackages',
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
        if (null !== $this->bandwidthPackages) {
            $res['BandwidthPackages'] = [];
            if (null !== $this->bandwidthPackages && \is_array($this->bandwidthPackages)) {
                $n = 0;
                foreach ($this->bandwidthPackages as $item) {
                    $res['BandwidthPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBandwidthPackagesResponseBody
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
        if (isset($map['BandwidthPackages'])) {
            if (!empty($map['BandwidthPackages'])) {
                $model->bandwidthPackages = [];
                $n                        = 0;
                foreach ($map['BandwidthPackages'] as $item) {
                    $model->bandwidthPackages[$n++] = null !== $item ? bandwidthPackages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
