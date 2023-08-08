<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponseBody\cenInterRegionBandwidthLimits;

use AlibabaCloud\Tea\Model;

class cenInterRegionBandwidthLimit extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $bandwidthLimit;

    /**
     * @example cenbwp-uenczwb592fnvv****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @example cen-pfa6ugf3xl0qsd****
     *
     * @var string
     */
    public $cenId;

    /**
     * @example china_china
     *
     * @var string
     */
    public $geographicSpanId;

    /**
     * @example ccn-cn-shanghai
     *
     * @var string
     */
    public $localRegionId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $oppositeRegionId;

    /**
     * @description Queries the bandwidth limits of cross-region connections.
     *
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bandwidthLimit'     => 'BandwidthLimit',
        'bandwidthPackageId' => 'BandwidthPackageId',
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
