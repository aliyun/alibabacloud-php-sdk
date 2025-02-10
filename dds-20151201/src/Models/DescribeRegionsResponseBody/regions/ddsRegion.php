<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRegionsResponseBody\regions\ddsRegion\zones;

class ddsRegion extends Model
{
    /**
     * @var string
     */
    public $endPoint;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $regionName;
    /**
     * @var zones
     */
    public $zones;
    protected $_name = [
        'endPoint'   => 'EndPoint',
        'regionId'   => 'RegionId',
        'regionName' => 'RegionName',
        'zones'      => 'Zones',
    ];

    public function validate()
    {
        if (null !== $this->zones) {
            $this->zones->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        if (null !== $this->zones) {
            $res['Zones'] = null !== $this->zones ? $this->zones->toArray($noStream) : $this->zones;
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
        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        if (isset($map['Zones'])) {
            $model->zones = zones::fromMap($map['Zones']);
        }

        return $model;
    }
}
