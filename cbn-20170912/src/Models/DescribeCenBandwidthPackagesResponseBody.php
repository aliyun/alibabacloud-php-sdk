<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages;
use AlibabaCloud\Tea\Model;

class DescribeCenBandwidthPackagesResponseBody extends Model
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
     * @var cenBandwidthPackages[]
     */
    public $cenBandwidthPackages;
    protected $_name = [
        'totalCount'           => 'TotalCount',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'pageNumber'           => 'PageNumber',
        'cenBandwidthPackages' => 'CenBandwidthPackages',
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
        if (null !== $this->cenBandwidthPackages) {
            $res['CenBandwidthPackages'] = [];
            if (null !== $this->cenBandwidthPackages && \is_array($this->cenBandwidthPackages)) {
                $n = 0;
                foreach ($this->cenBandwidthPackages as $item) {
                    $res['CenBandwidthPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenBandwidthPackagesResponseBody
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
        if (isset($map['CenBandwidthPackages'])) {
            if (!empty($map['CenBandwidthPackages'])) {
                $model->cenBandwidthPackages = [];
                $n                           = 0;
                foreach ($map['CenBandwidthPackages'] as $item) {
                    $model->cenBandwidthPackages[$n++] = null !== $item ? cenBandwidthPackages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
