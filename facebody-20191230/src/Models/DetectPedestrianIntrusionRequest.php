<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\DetectPedestrianIntrusionRequest\region;
use AlibabaCloud\Tea\Model;

class DetectPedestrianIntrusionRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var region[]
     */
    public $region;

    /**
     * @var string
     */
    public $regionType;
    protected $_name = [
        'imageURL'   => 'ImageURL',
        'region'     => 'Region',
        'regionType' => 'RegionType',
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
     * @return DetectPedestrianIntrusionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
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
