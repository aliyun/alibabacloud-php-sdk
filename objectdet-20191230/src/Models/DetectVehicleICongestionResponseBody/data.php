<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponseBody;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponseBody\data\elements;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponseBody\data\regionIntersectFeatures;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponseBody\data\regionIntersectMatched;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponseBody\data\regionIntersects;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @var regionIntersectFeatures[]
     */
    public $regionIntersectFeatures;

    /**
     * @var regionIntersectMatched[]
     */
    public $regionIntersectMatched;

    /**
     * @var regionIntersects[]
     */
    public $regionIntersects;
    protected $_name = [
        'elements'                => 'Elements',
        'regionIntersectFeatures' => 'RegionIntersectFeatures',
        'regionIntersectMatched'  => 'RegionIntersectMatched',
        'regionIntersects'        => 'RegionIntersects',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elements) {
            $res['Elements'] = [];
            if (null !== $this->elements && \is_array($this->elements)) {
                $n = 0;
                foreach ($this->elements as $item) {
                    $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionIntersectFeatures) {
            $res['RegionIntersectFeatures'] = [];
            if (null !== $this->regionIntersectFeatures && \is_array($this->regionIntersectFeatures)) {
                $n = 0;
                foreach ($this->regionIntersectFeatures as $item) {
                    $res['RegionIntersectFeatures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionIntersectMatched) {
            $res['RegionIntersectMatched'] = [];
            if (null !== $this->regionIntersectMatched && \is_array($this->regionIntersectMatched)) {
                $n = 0;
                foreach ($this->regionIntersectMatched as $item) {
                    $res['RegionIntersectMatched'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionIntersects) {
            $res['RegionIntersects'] = [];
            if (null !== $this->regionIntersects && \is_array($this->regionIntersects)) {
                $n = 0;
                foreach ($this->regionIntersects as $item) {
                    $res['RegionIntersects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['Elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? elements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionIntersectFeatures'])) {
            if (!empty($map['RegionIntersectFeatures'])) {
                $model->regionIntersectFeatures = [];
                $n                              = 0;
                foreach ($map['RegionIntersectFeatures'] as $item) {
                    $model->regionIntersectFeatures[$n++] = null !== $item ? regionIntersectFeatures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionIntersectMatched'])) {
            if (!empty($map['RegionIntersectMatched'])) {
                $model->regionIntersectMatched = [];
                $n                             = 0;
                foreach ($map['RegionIntersectMatched'] as $item) {
                    $model->regionIntersectMatched[$n++] = null !== $item ? regionIntersectMatched::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionIntersects'])) {
            if (!empty($map['RegionIntersects'])) {
                $model->regionIntersects = [];
                $n                       = 0;
                foreach ($map['RegionIntersects'] as $item) {
                    $model->regionIntersects[$n++] = null !== $item ? regionIntersects::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
