<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages;

class DescribeCenBandwidthPackagesResponseBody extends Model
{
    /**
     * @var cenBandwidthPackages
     */
    public $cenBandwidthPackages;

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
        'cenBandwidthPackages' => 'CenBandwidthPackages',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->cenBandwidthPackages) {
            $this->cenBandwidthPackages->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenBandwidthPackages) {
            $res['CenBandwidthPackages'] = null !== $this->cenBandwidthPackages ? $this->cenBandwidthPackages->toArray($noStream) : $this->cenBandwidthPackages;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenBandwidthPackages'])) {
            $model->cenBandwidthPackages = cenBandwidthPackages::fromMap($map['CenBandwidthPackages']);
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
