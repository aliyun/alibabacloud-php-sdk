<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages;

use AlibabaCloud\Tea\Model;

class orginInterRegionBandwidthLimits extends Model
{
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

    /**
     * @var string
     */
    public $bandwidthLimit;
    protected $_name = [
        'oppositeRegionId' => 'OppositeRegionId',
        'geographicSpanId' => 'GeographicSpanId',
        'localRegionId'    => 'LocalRegionId',
        'bandwidthLimit'   => 'BandwidthLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oppositeRegionId) {
            $res['OppositeRegionId'] = $this->oppositeRegionId;
        }
        if (null !== $this->geographicSpanId) {
            $res['GeographicSpanId'] = $this->geographicSpanId;
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
     * @return orginInterRegionBandwidthLimits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OppositeRegionId'])) {
            $model->oppositeRegionId = $map['OppositeRegionId'];
        }
        if (isset($map['GeographicSpanId'])) {
            $model->geographicSpanId = $map['GeographicSpanId'];
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
