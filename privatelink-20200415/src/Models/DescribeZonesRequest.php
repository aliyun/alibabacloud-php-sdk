<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Dara\Model;

class DescribeZonesRequest extends Model
{
    /**
     * @var bool
     */
    public $crossRegion;

    /**
     * @var string
     */
    public $crossRegionSide;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceResourceType;
    protected $_name = [
        'crossRegion' => 'CrossRegion',
        'crossRegionSide' => 'CrossRegionSide',
        'regionId' => 'RegionId',
        'serviceResourceType' => 'ServiceResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossRegion) {
            $res['CrossRegion'] = $this->crossRegion;
        }

        if (null !== $this->crossRegionSide) {
            $res['CrossRegionSide'] = $this->crossRegionSide;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceResourceType) {
            $res['ServiceResourceType'] = $this->serviceResourceType;
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
        if (isset($map['CrossRegion'])) {
            $model->crossRegion = $map['CrossRegion'];
        }

        if (isset($map['CrossRegionSide'])) {
            $model->crossRegionSide = $map['CrossRegionSide'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceResourceType'])) {
            $model->serviceResourceType = $map['ServiceResourceType'];
        }

        return $model;
    }
}
