<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeRegionsResponseBody\regions\region\zones;
use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @var zones
     */
    public $zones;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'zones'    => 'Zones',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zones) {
            $res['Zones'] = null !== $this->zones ? $this->zones->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Zones'])) {
            $model->zones = zones::fromMap($map['Zones']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
