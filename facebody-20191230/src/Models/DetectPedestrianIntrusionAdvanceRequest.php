<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionAdvanceRequest\detectRegion;
use AlibabaCloud\Tea\Model;

class DetectPedestrianIntrusionAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var detectRegion[]
     */
    public $detectRegion;

    /**
     * @var string
     */
    public $regionType;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'detectRegion'   => 'DetectRegion',
        'regionType'     => 'RegionType',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->detectRegion) {
            $res['DetectRegion'] = [];
            if (null !== $this->detectRegion && \is_array($this->detectRegion)) {
                $n = 0;
                foreach ($this->detectRegion as $item) {
                    $res['DetectRegion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionType) {
            $res['RegionType'] = $this->regionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectPedestrianIntrusionAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['DetectRegion'])) {
            if (!empty($map['DetectRegion'])) {
                $model->detectRegion = [];
                $n                   = 0;
                foreach ($map['DetectRegion'] as $item) {
                    $model->detectRegion[$n++] = null !== $item ? detectRegion::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionType'])) {
            $model->regionType = $map['RegionType'];
        }

        return $model;
    }
}
