<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeRegionsResponseBody\regions\region\zones;
use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $supportPolarx10;

    /**
     * @var bool
     */
    public $supportPolarx20;

    /**
     * @var zones
     */
    public $zones;
    protected $_name = [
        'regionId'        => 'RegionId',
        'supportPolarx10' => 'SupportPolarx10',
        'supportPolarx20' => 'SupportPolarx20',
        'zones'           => 'Zones',
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
        if (null !== $this->supportPolarx10) {
            $res['SupportPolarx10'] = $this->supportPolarx10;
        }
        if (null !== $this->supportPolarx20) {
            $res['SupportPolarx20'] = $this->supportPolarx20;
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
        if (isset($map['SupportPolarx10'])) {
            $model->supportPolarx10 = $map['SupportPolarx10'];
        }
        if (isset($map['SupportPolarx20'])) {
            $model->supportPolarx20 = $map['SupportPolarx20'];
        }
        if (isset($map['Zones'])) {
            $model->zones = zones::fromMap($map['Zones']);
        }

        return $model;
    }
}
