<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAreasResponseBody\liveAreasList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAreasResponseBody\liveAreasList\liveArea\regions;
use AlibabaCloud\Tea\Model;

class liveArea extends Model
{
    /**
     * @description The region type. Valid values:
     *
     *   domestic: in the Chinese mainland
     *   overseas: outside the Chinese mainland
     *
     * @example domestic
     *
     * @var string
     */
    public $regionType;

    /**
     * @description The regions.
     *
     * @var regions
     */
    public $regions;
    protected $_name = [
        'regionType' => 'RegionType',
        'regions' => 'Regions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionType) {
            $res['RegionType'] = $this->regionType;
        }
        if (null !== $this->regions) {
            $res['Regions'] = null !== $this->regions ? $this->regions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveArea
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionType'])) {
            $model->regionType = $map['RegionType'];
        }
        if (isset($map['Regions'])) {
            $model->regions = regions::fromMap($map['Regions']);
        }

        return $model;
    }
}
