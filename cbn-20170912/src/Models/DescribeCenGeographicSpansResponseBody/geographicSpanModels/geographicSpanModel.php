<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansResponseBody\geographicSpanModels;

use AlibabaCloud\Tea\Model;

class geographicSpanModel extends Model
{
    /**
     * @var string
     */
    public $localGeoRegionId;

    /**
     * @var string
     */
    public $geographicSpanId;

    /**
     * @var string
     */
    public $oppositeGeoRegionId;
    protected $_name = [
        'localGeoRegionId'    => 'LocalGeoRegionId',
        'geographicSpanId'    => 'GeographicSpanId',
        'oppositeGeoRegionId' => 'OppositeGeoRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localGeoRegionId) {
            $res['LocalGeoRegionId'] = $this->localGeoRegionId;
        }
        if (null !== $this->geographicSpanId) {
            $res['GeographicSpanId'] = $this->geographicSpanId;
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
        if (isset($map['LocalGeoRegionId'])) {
            $model->localGeoRegionId = $map['LocalGeoRegionId'];
        }
        if (isset($map['GeographicSpanId'])) {
            $model->geographicSpanId = $map['GeographicSpanId'];
        }
        if (isset($map['OppositeGeoRegionId'])) {
            $model->oppositeGeoRegionId = $map['OppositeGeoRegionId'];
        }

        return $model;
    }
}
