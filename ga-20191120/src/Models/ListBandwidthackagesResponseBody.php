<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthackagesResponseBody\bandwidthPackages;
use AlibabaCloud\Tea\Model;

class ListBandwidthackagesResponseBody extends Model
{
    /**
     * @var bandwidthPackages[]
     */
    public $bandwidthPackages;

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
    protected $_name = [
        'bandwidthPackages' => 'BandwidthPackages',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackages) {
            $res['BandwidthPackages'] = [];
            if (null !== $this->bandwidthPackages && \is_array($this->bandwidthPackages)) {
                $n = 0;
                foreach ($this->bandwidthPackages as $item) {
                    $res['BandwidthPackages'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListBandwidthackagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackages'])) {
            if (!empty($map['BandwidthPackages'])) {
                $model->bandwidthPackages = [];
                $n                        = 0;
                foreach ($map['BandwidthPackages'] as $item) {
                    $model->bandwidthPackages[$n++] = null !== $item ? bandwidthPackages::fromMap($item) : $item;
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
