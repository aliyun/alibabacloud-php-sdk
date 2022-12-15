<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectVehicleICongestionShrinkRequest extends Model
{
    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/objectdet/DetectVehicleICongestion/DetectVehicleICongestion1.jpg
     *
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $preRegionIntersectFeaturesShrink;

    /**
     * @var string
     */
    public $roadRegionsShrink;
    protected $_name = [
        'imageURL'                         => 'ImageURL',
        'preRegionIntersectFeaturesShrink' => 'PreRegionIntersectFeatures',
        'roadRegionsShrink'                => 'RoadRegions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->preRegionIntersectFeaturesShrink) {
            $res['PreRegionIntersectFeatures'] = $this->preRegionIntersectFeaturesShrink;
        }
        if (null !== $this->roadRegionsShrink) {
            $res['RoadRegions'] = $this->roadRegionsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectVehicleICongestionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['PreRegionIntersectFeatures'])) {
            $model->preRegionIntersectFeaturesShrink = $map['PreRegionIntersectFeatures'];
        }
        if (isset($map['RoadRegions'])) {
            $model->roadRegionsShrink = $map['RoadRegions'];
        }

        return $model;
    }
}
