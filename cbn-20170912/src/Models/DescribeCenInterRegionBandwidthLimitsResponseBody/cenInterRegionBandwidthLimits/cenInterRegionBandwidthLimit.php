<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponseBody\cenInterRegionBandwidthLimits;

use AlibabaCloud\Tea\Model;

class cenInterRegionBandwidthLimit extends Model
{
    /**
     * @description The maximum bandwidth of the inter-region connection. Unit: Mbit/s.
     *
     * @example 1
     *
     * @var int
     */
    public $bandwidthLimit;

    /**
     * @description The ID of the bandwidth plan.
     *
     * @example cenbwp-uenczwb592fnvv****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The bandwidth allocation method. Valid values:
     *
     *   **BandwidthPackage**: allocates bandwidth from a bandwidth plan.
     *   **DataTransfer**: bandwidth is billed based on the pay-by-data-transfer metering method.
     *
     * @example BandwidthPackage
     *
     * @var string
     */
    public $bandwidthType;

    /**
     * @description The CEN instance ID.
     *
     * @example cen-pfa6ugf3xl0qsd****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The IDs of the local and peer regions.
     *
     * @example china_china
     *
     * @var string
     */
    public $geographicSpanId;

    /**
     * @description The ID of the local region.
     *
     * You can call the [DescribeChildInstanceRegions](https://help.aliyun.com/document_detail/132080.html) operation to query the most recent region list.
     * @example ccn-cn-shanghai
     *
     * @var string
     */
    public $localRegionId;

    /**
     * @description The ID of the peer region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $oppositeRegionId;

    /**
     * @description The bandwidth status of the inter-region connection. Valid values:
     *
     *   **Active**
     *   **Modifying**
     *
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bandwidthLimit'     => 'BandwidthLimit',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'bandwidthType'      => 'BandwidthType',
        'cenId'              => 'CenId',
        'geographicSpanId'   => 'GeographicSpanId',
        'localRegionId'      => 'LocalRegionId',
        'oppositeRegionId'   => 'OppositeRegionId',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthLimit) {
            $res['BandwidthLimit'] = $this->bandwidthLimit;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->geographicSpanId) {
            $res['GeographicSpanId'] = $this->geographicSpanId;
        }
        if (null !== $this->localRegionId) {
            $res['LocalRegionId'] = $this->localRegionId;
        }
        if (null !== $this->oppositeRegionId) {
            $res['OppositeRegionId'] = $this->oppositeRegionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenInterRegionBandwidthLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthLimit'])) {
            $model->bandwidthLimit = $map['BandwidthLimit'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['GeographicSpanId'])) {
            $model->geographicSpanId = $map['GeographicSpanId'];
        }
        if (isset($map['LocalRegionId'])) {
            $model->localRegionId = $map['LocalRegionId'];
        }
        if (isset($map['OppositeRegionId'])) {
            $model->oppositeRegionId = $map['OppositeRegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
