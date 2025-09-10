<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionAdvanceRequest\preRegionIntersectFeatures;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionAdvanceRequest\roadRegions;
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
        'imageURLObject' => 'ImageURL',
        'preRegionIntersectFeatures' => 'PreRegionIntersectFeatures',
        'roadRegions' => 'RoadRegions',
    ];

    public function validate()
    {
        if (\is_array($this->preRegionIntersectFeatures)) {
            Model::validateArray($this->preRegionIntersectFeatures);
        }
        if (\is_array($this->roadRegions)) {
            Model::validateArray($this->roadRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }

        if (null !== $this->preRegionIntersectFeatures) {
            if (\is_array($this->preRegionIntersectFeatures)) {
                $res['PreRegionIntersectFeatures'] = [];
                $n1 = 0;
                foreach ($this->preRegionIntersectFeatures as $item1) {
                    $res['PreRegionIntersectFeatures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->roadRegions) {
            if (\is_array($this->roadRegions)) {
                $res['RoadRegions'] = [];
                $n1 = 0;
                foreach ($this->roadRegions as $item1) {
                    $res['RoadRegions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $model->imageURLObject = $map['ImageURL'];
        }

        if (isset($map['PreRegionIntersectFeatures'])) {
            if (!empty($map['PreRegionIntersectFeatures'])) {
                $model->preRegionIntersectFeatures = [];
                $n1 = 0;
                foreach ($map['PreRegionIntersectFeatures'] as $item1) {
                    $model->preRegionIntersectFeatures[$n1] = preRegionIntersectFeatures::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RoadRegions'])) {
            if (!empty($map['RoadRegions'])) {
                $model->roadRegions = [];
                $n1 = 0;
                foreach ($map['RoadRegions'] as $item1) {
                    $model->roadRegions[$n1] = roadRegions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
