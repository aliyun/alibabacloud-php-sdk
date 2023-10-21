<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\orginInterRegionBandwidthLimits;

use AlibabaCloud\Tea\Model;

class orginInterRegionBandwidthLimit extends Model
{
    /**
     * @description The maximum bandwidth value for the inter-region connection.
     *
     * @example 1
     *
     * @var string
     */
    public $bandwidthLimit;

    /**
     * @description The connected regions.
     *
     * @example north-america_china
     *
     * @var string
     */
    public $geographicSpanId;

    /**
     * @description The ID of the local region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $localRegionId;

    /**
     * @description The ID of the peer region.
     *
     * @example us-west-1
     *
     * @var string
     */
    public $oppositeRegionId;
    protected $_name = [
        'bandwidthLimit'   => 'BandwidthLimit',
        'geographicSpanId' => 'GeographicSpanId',
        'localRegionId'    => 'LocalRegionId',
        'oppositeRegionId' => 'OppositeRegionId',
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
        if (null !== $this->geographicSpanId) {
            $res['GeographicSpanId'] = $this->geographicSpanId;
        }
        if (null !== $this->localRegionId) {
            $res['LocalRegionId'] = $this->localRegionId;
        }
        if (null !== $this->oppositeRegionId) {
            $res['OppositeRegionId'] = $this->oppositeRegionId;
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
        if (isset($map['GeographicSpanId'])) {
            $model->geographicSpanId = $map['GeographicSpanId'];
        }
        if (isset($map['LocalRegionId'])) {
            $model->localRegionId = $map['LocalRegionId'];
        }
        if (isset($map['OppositeRegionId'])) {
            $model->oppositeRegionId = $map['OppositeRegionId'];
        }

        return $model;
    }
}
