<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectPedestrianIntrusionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $detectRegionShrink;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/DetectPedestrianIntrusion/DetectPedestrianIntrusion2.jpg
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example rectangle
     *
     * @var string
     */
    public $regionType;
    protected $_name = [
        'detectRegionShrink' => 'DetectRegion',
        'imageURL'           => 'ImageURL',
        'regionType'         => 'RegionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectRegionShrink) {
            $res['DetectRegion'] = $this->detectRegionShrink;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->regionType) {
            $res['RegionType'] = $this->regionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectPedestrianIntrusionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetectRegion'])) {
            $model->detectRegionShrink = $map['DetectRegion'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['RegionType'])) {
            $model->regionType = $map['RegionType'];
        }

        return $model;
    }
}
