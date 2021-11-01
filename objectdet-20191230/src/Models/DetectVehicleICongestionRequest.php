<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionRequest\preRegionIntersectFeatures;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionRequest\roadRegions;
use AlibabaCloud\Tea\Model;

class DetectVehicleICongestionRequest extends Model
{
    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $originRequestId;

    /**
     * @var preRegionIntersectFeatures[]
     */
    public $preRegionIntersectFeatures;

    /**
     * @var roadRegions[]
     */
    public $roadRegions;

    /**
     * @var string
     */
    public $streamArn;
    protected $_name = [
        'imageURL'                   => 'ImageURL',
        'originRequestId'            => 'OriginRequestId',
        'preRegionIntersectFeatures' => 'PreRegionIntersectFeatures',
        'roadRegions'                => 'RoadRegions',
        'streamArn'                  => 'StreamArn',
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
        if (null !== $this->originRequestId) {
            $res['OriginRequestId'] = $this->originRequestId;
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
        if (null !== $this->streamArn) {
            $res['StreamArn'] = $this->streamArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectVehicleICongestionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['OriginRequestId'])) {
            $model->originRequestId = $map['OriginRequestId'];
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
        if (isset($map['StreamArn'])) {
            $model->streamArn = $map['StreamArn'];
        }

        return $model;
    }
}
