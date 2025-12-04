<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;

class PutDataEventSelectorRequest extends Model
{
    /**
     * @var string
     */
    public $eventSelectors;

    /**
     * @var bool
     */
    public $isTrailAllRegion;

    /**
     * @var string
     */
    public $trailName;

    /**
     * @var string
     */
    public $trailRegionIds;
    protected $_name = [
        'eventSelectors' => 'EventSelectors',
        'isTrailAllRegion' => 'IsTrailAllRegion',
        'trailName' => 'TrailName',
        'trailRegionIds' => 'TrailRegionIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventSelectors) {
            $res['EventSelectors'] = $this->eventSelectors;
        }

        if (null !== $this->isTrailAllRegion) {
            $res['IsTrailAllRegion'] = $this->isTrailAllRegion;
        }

        if (null !== $this->trailName) {
            $res['TrailName'] = $this->trailName;
        }

        if (null !== $this->trailRegionIds) {
            $res['TrailRegionIds'] = $this->trailRegionIds;
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
        if (isset($map['EventSelectors'])) {
            $model->eventSelectors = $map['EventSelectors'];
        }

        if (isset($map['IsTrailAllRegion'])) {
            $model->isTrailAllRegion = $map['IsTrailAllRegion'];
        }

        if (isset($map['TrailName'])) {
            $model->trailName = $map['TrailName'];
        }

        if (isset($map['TrailRegionIds'])) {
            $model->trailRegionIds = $map['TrailRegionIds'];
        }

        return $model;
    }
}
