<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenGeographicSpansResponseBody\geographicSpanModels;

use AlibabaCloud\Dara\Model;

class geographicSpanModel extends Model
{
    /**
     * @var string
     */
    public $geographicSpanId;
    /**
     * @var string
     */
    public $localGeoRegionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
