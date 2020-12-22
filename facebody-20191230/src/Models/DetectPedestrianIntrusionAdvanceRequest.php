<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionAdvanceRequest\region;
use AlibabaCloud\Tea\Model;

class DetectPedestrianIntrusionAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var region[]
     */
    public $region;

    /**
     * @var string
     */
    public $regionType;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'region'         => 'Region',
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
        if (null !== $this->region) {
            $res['Region'] = [];
            if (null !== $this->region && \is_array($this->region)) {
                $n = 0;
                foreach ($this->region as $item) {
                    $res['Region'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Region'])) {
            if (!empty($map['Region'])) {
                $model->region = [];
                $n             = 0;
                foreach ($map['Region'] as $item) {
                    $model->region[$n++] = null !== $item ? region::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionType'])) {
            $model->regionType = $map['RegionType'];
        }

        return $model;
    }
}
