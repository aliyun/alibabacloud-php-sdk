<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages;
use AlibabaCloud\Tea\Model;

class DescribeCenBandwidthPackagesResponseBody extends Model
{
    /**
     * @description The expiration time of the temporary upgrade.
     *
     * @var cenBandwidthPackages
     */
    public $cenBandwidthPackages;

    /**
     * @description A list of CEN instances that are associated with the bandwidth plan.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the source region.
     *
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the area that you want to query. Valid values:
     *
     *   **china**: Chinese mainland.
     *   **asia-pacific**: Asia Pacific
     *   **europe**: Europe
     *   **australia**: Australia
     *   **north-america**: North America
     *
     * @example 9D7E2400-2755-4AF5-9B73-12565E4F73A0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The bandwidth value to which the bandwidth plan is rolled back when the temporary upgrade ends.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cenBandwidthPackages' => 'CenBandwidthPackages',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenBandwidthPackages) {
            $res['CenBandwidthPackages'] = null !== $this->cenBandwidthPackages ? $this->cenBandwidthPackages->toMap() : null;
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
     * @return DescribeCenBandwidthPackagesResponseBody
     */
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
