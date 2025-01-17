<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenBandwidthPackagesResponseBody\cenBandwidthPackages\cenBandwidthPackage\orginInterRegionBandwidthLimits;

use AlibabaCloud\Dara\Model;

class orginInterRegionBandwidthLimit extends Model
{
    /**
     * @var string
     */
    public $bandwidthLimit;
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
    protected $_name = [
        'bandwidthLimit'   => 'BandwidthLimit',
        'geographicSpanId' => 'GeographicSpanId',
        'localRegionId'    => 'LocalRegionId',
        'oppositeRegionId' => 'OppositeRegionId',
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
