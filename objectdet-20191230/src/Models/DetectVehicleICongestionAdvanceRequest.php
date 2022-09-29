<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionAdvanceRequest\preRegionIntersectFeatures;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionAdvanceRequest\roadRegions;
use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class DetectVehicleICongestionAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var preRegionIntersectFeatures[]
     */
    public $preRegionIntersectFeatures;

    /**
     * @var roadRegions[]
     */
    public $roadRegions;
    protected $_name = [
        'imageURLObject'             => 'ImageURL',
        'preRegionIntersectFeatures' => 'PreRegionIntersectFeatures',
        'roadRegions'                => 'RoadRegions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->preRegionIntersectFeatures) {
            $res['PreRegionIntersectFeatures'] = [];
            if (null !== $this->preRegionIntersectFeatures && \is_array($this->preRegionIntersectFeatures)) {
                $n = 0;
                foreach ($this->preRegionIntersectFeatures as $item) {
                    $res['PreRegionIntersectFeatures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roadRegions) {
            $res['RoadRegions'] = [];
            if (null !== $this->roadRegions && \is_array($this->roadRegions)) {
                $n = 0;
                foreach ($this->roadRegions as $item) {
                    $res['RoadRegions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectVehicleICongestionAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['PreRegionIntersectFeatures'])) {
            if (!empty($map['PreRegionIntersectFeatures'])) {
                $model->preRegionIntersectFeatures = [];
                $n                                 = 0;
                foreach ($map['PreRegionIntersectFeatures'] as $item) {
                    $model->preRegionIntersectFeatures[$n++] = null !== $item ? preRegionIntersectFeatures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RoadRegions'])) {
            if (!empty($map['RoadRegions'])) {
                $model->roadRegions = [];
                $n                  = 0;
                foreach ($map['RoadRegions'] as $item) {
                    $model->roadRegions[$n++] = null !== $item ? roadRegions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
