<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\orginInterRegionBandwidthLimits;

use AlibabaCloud\Tea\Model;

class orginInterRegionBandwidthLimit extends Model
{
    /**
     * @var string
     */
    public $bandwidthLimit;

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
    public $localRegionId;
    protected $_name = [
        'bandwidthLimit'   => 'BandwidthLimit',
        'oppositeRegionId' => 'OppositeRegionId',
        'geographicSpanId' => 'GeographicSpanId',
        'localRegionId'    => 'LocalRegionId',
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
        if (null !== $this->oppositeRegionId) {
            $res['OppositeRegionId'] = $this->oppositeRegionId;
        }
        if (null !== $this->geographicSpanId) {
            $res['GeographicSpanId'] = $this->geographicSpanId;
        }
        if (null !== $this->localRegionId) {
            $res['LocalRegionId'] = $this->localRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orginInterRegionBandwidthLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthLimit'])) {
            $model->bandwidthLimit = $map['BandwidthLimit'];
        }
        if (isset($map['OppositeRegionId'])) {
            $model->oppositeRegionId = $map['OppositeRegionId'];
        }
        if (isset($map['GeographicSpanId'])) {
            $model->geographicSpanId = $map['GeographicSpanId'];
        }
        if (isset($map['LocalRegionId'])) {
            $model->localRegionId = $map['LocalRegionId'];
        }

        return $model;
    }
}
