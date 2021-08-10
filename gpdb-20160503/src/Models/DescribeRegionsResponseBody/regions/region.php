<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRegionsResponseBody\regions\region\zones;
use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var zones
     */
    public $zones;
    protected $_name = [
        'regionId' => 'RegionId',
        'zones'    => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zones) {
            $res['Zones'] = null !== $this->zones ? $this->zones->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return region
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Zones'])) {
            $model->zones = zones::fromMap($map['Zones']);
        }

        return $model;
    }
}
