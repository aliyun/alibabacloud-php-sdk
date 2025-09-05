<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;

class DetectPedestrianIntrusionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $detectRegionShrink;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $regionType;
    protected $_name = [
        'detectRegionShrink' => 'DetectRegion',
        'imageURL' => 'ImageURL',
        'regionType' => 'RegionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
