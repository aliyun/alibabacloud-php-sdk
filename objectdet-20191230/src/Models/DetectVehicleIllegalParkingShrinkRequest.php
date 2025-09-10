<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Dara\Model;

class DetectVehicleIllegalParkingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $roadRegionsShrink;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'roadRegionsShrink' => 'RoadRegions',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        if (null !== $this->roadRegionsShrink) {
            $res['RoadRegions'] = $this->roadRegionsShrink;
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
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        if (isset($map['RoadRegions'])) {
            $model->roadRegionsShrink = $map['RoadRegions'];
        }

        return $model;
    }
}
