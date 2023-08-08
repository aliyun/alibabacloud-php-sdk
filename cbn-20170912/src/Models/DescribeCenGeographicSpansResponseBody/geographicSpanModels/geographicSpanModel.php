<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansResponseBody\geographicSpanModels;

use AlibabaCloud\Tea\Model;

class geographicSpanModel extends Model
{
    /**
     * @description The ID of the pair of connected areas.
     *
     * @example china_asia-pacific
     *
     * @var string
     */
    public $geographicSpanId;

    /**
     * @description The ID of the local area.
     *
     * @example asia-pacific
     *
     * @var string
     */
    public $localGeoRegionId;

    /**
     * @description The ID of the peer area.
     *
     * @example china
     *
     * @var string
     */
    public $oppositeGeoRegionId;
    protected $_name = [
        'geographicSpanId'    => 'GeographicSpanId',
        'localGeoRegionId'    => 'LocalGeoRegionId',
        'oppositeGeoRegionId' => 'OppositeGeoRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->geographicSpanId) {
            $res['GeographicSpanId'] = $this->geographicSpanId;
        }
        if (null !== $this->localGeoRegionId) {
            $res['LocalGeoRegionId'] = $this->localGeoRegionId;
        }
        if (null !== $this->oppositeGeoRegionId) {
            $res['OppositeGeoRegionId'] = $this->oppositeGeoRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return geographicSpanModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GeographicSpanId'])) {
            $model->geographicSpanId = $map['GeographicSpanId'];
        }
        if (isset($map['LocalGeoRegionId'])) {
            $model->localGeoRegionId = $map['LocalGeoRegionId'];
        }
        if (isset($map['OppositeGeoRegionId'])) {
            $model->oppositeGeoRegionId = $map['OppositeGeoRegionId'];
        }

        return $model;
    }
}
