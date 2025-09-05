<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionRequest\detectRegion;

class DetectPedestrianIntrusionRequest extends Model
{
    /**
     * @var detectRegion[]
     */
    public $detectRegion;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $regionType;
    protected $_name = [
        'detectRegion' => 'DetectRegion',
        'imageURL' => 'ImageURL',
        'regionType' => 'RegionType',
    ];

    public function validate()
    {
        if (\is_array($this->detectRegion)) {
            Model::validateArray($this->detectRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectRegion) {
            if (\is_array($this->detectRegion)) {
                $res['DetectRegion'] = [];
                $n1 = 0;
                foreach ($this->detectRegion as $item1) {
                    $res['DetectRegion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['DetectRegion'])) {
                $model->detectRegion = [];
                $n1 = 0;
                foreach ($map['DetectRegion'] as $item1) {
                    $model->detectRegion[$n1] = detectRegion::fromMap($item1);
                    ++$n1;
                }
            }
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
