<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class DetectPedestrianIntrusionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $regionShrink;

    /**
     * @var string
     */
    public $regionType;
    protected $_name = [
        'imageURL'     => 'ImageURL',
        'regionShrink' => 'Region',
        'regionType'   => 'RegionType',
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
        if (null !== $this->regionShrink) {
            $res['Region'] = $this->regionShrink;
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
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['Region'])) {
            $model->regionShrink = $map['Region'];
        }
        if (isset($map['RegionType'])) {
            $model->regionType = $map['RegionType'];
        }

        return $model;
    }
}
