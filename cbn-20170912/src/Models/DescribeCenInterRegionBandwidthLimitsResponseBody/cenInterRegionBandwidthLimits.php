<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponseBody;

use AlibabaCloud\Tea\Model;

class cenInterRegionBandwidthLimits extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $oppositeRegionId;

    /**
     * @var string
     */
    public $geographicSpanId;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $localRegionId;

    /**
     * @var int
     */
    public $bandwidthLimit;
    protected $_name = [
        'status'             => 'Status',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'oppositeRegionId'   => 'OppositeRegionId',
        'geographicSpanId'   => 'GeographicSpanId',
        'cenId'              => 'CenId',
        'localRegionId'      => 'LocalRegionId',
        'bandwidthLimit'     => 'BandwidthLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->oppositeRegionId) {
            $res['OppositeRegionId'] = $this->oppositeRegionId;
        }
        if (null !== $this->geographicSpanId) {
            $res['GeographicSpanId'] = $this->geographicSpanId;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->localRegionId) {
            $res['LocalRegionId'] = $this->localRegionId;
        }
        if (null !== $this->bandwidthLimit) {
            $res['BandwidthLimit'] = $this->bandwidthLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenInterRegionBandwidthLimits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['OppositeRegionId'])) {
            $model->oppositeRegionId = $map['OppositeRegionId'];
        }
        if (isset($map['GeographicSpanId'])) {
            $model->geographicSpanId = $map['GeographicSpanId'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['LocalRegionId'])) {
            $model->localRegionId = $map['LocalRegionId'];
        }
        if (isset($map['BandwidthLimit'])) {
            $model->bandwidthLimit = $map['BandwidthLimit'];
        }

        return $model;
    }
}
