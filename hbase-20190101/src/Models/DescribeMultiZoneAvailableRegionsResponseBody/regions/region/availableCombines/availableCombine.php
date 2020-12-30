<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions\region\availableCombines;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions\region\availableCombines\availableCombine\zones;
use AlibabaCloud\Tea\Model;

class availableCombine extends Model
{
    /**
     * @var zones
     */
    public $zones;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'zones' => 'Zones',
        'id'    => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableCombine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Zones'])) {
            $model->zones = zones::fromMap($map['Zones']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
