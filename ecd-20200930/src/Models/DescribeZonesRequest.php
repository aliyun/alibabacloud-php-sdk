<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribeZonesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $vpcAccessZone;

    /**
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'regionId' => 'RegionId',
        'vpcAccessZone' => 'VpcAccessZone',
        'zoneType' => 'ZoneType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vpcAccessZone) {
            $res['VpcAccessZone'] = $this->vpcAccessZone;
        }

        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VpcAccessZone'])) {
            $model->vpcAccessZone = $map['VpcAccessZone'];
        }

        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
