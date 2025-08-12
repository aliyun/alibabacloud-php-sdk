<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAreasResponseBody\liveAreasList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAreasResponseBody\liveAreasList\liveArea\regions;

class liveArea extends Model
{
    /**
     * @var string
     */
    public $regionType;

    /**
     * @var regions
     */
    public $regions;
    protected $_name = [
        'regionType' => 'RegionType',
        'regions' => 'Regions',
    ];

    public function validate()
    {
        if (null !== $this->regions) {
            $this->regions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionType) {
            $res['RegionType'] = $this->regionType;
        }

        if (null !== $this->regions) {
            $res['Regions'] = null !== $this->regions ? $this->regions->toArray($noStream) : $this->regions;
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
        if (isset($map['RegionType'])) {
            $model->regionType = $map['RegionType'];
        }

        if (isset($map['Regions'])) {
            $model->regions = regions::fromMap($map['Regions']);
        }

        return $model;
    }
}
