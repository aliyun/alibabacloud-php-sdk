<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenInterRegionBandwidthLimitsResponseBody\cenInterRegionBandwidthLimits;

use AlibabaCloud\Dara\Model;

class cenInterRegionBandwidthLimit extends Model
{
    /**
     * @var int
     */
    public $bandwidthLimit;
    /**
     * @var string
     */
    public $bandwidthPackageId;
    /**
     * @var string
     */
    public $bandwidthType;
    /**
     * @var string
     */
    public $cenId;
    /**
     * @var string
     */
    public $geographicSpanId;
    /**
     * @var string
     */
    public $localRegionId;
    /**
     * @var string
     */
    public $oppositeRegionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
