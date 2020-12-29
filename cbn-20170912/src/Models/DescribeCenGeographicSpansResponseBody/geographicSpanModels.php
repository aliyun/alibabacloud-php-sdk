<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansResponseBody;

use AlibabaCloud\Tea\Model;

class geographicSpanModels extends Model
{
    /**
     * @var string
     */
    public $geographicSpanId;

    /**
     * @var string
     */
    public $oppositeGeoRegionId;

    /**
     * @var string
     */
    public $localGeoRegionId;
    protected $_name = [
        'geographicSpanId'    => 'GeographicSpanId',
        'oppositeGeoRegionId' => 'OppositeGeoRegionId',
        'localGeoRegionId'    => 'LocalGeoRegionId',
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
        if (null !== $this->oppositeGeoRegionId) {
            $res['OppositeGeoRegionId'] = $this->oppositeGeoRegionId;
        }
        if (null !== $this->localGeoRegionId) {
            $res['LocalGeoRegionId'] = $this->localGeoRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return geographicSpanModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GeographicSpanId'])) {
            $model->geographicSpanId = $map['GeographicSpanId'];
        }
        if (isset($map['OppositeGeoRegionId'])) {
            $model->oppositeGeoRegionId = $map['OppositeGeoRegionId'];
        }
        if (isset($map['LocalGeoRegionId'])) {
            $model->localGeoRegionId = $map['LocalGeoRegionId'];
        }

        return $model;
    }
}
