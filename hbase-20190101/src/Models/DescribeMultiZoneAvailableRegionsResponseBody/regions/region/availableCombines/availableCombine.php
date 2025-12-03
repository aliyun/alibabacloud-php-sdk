<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions\region\availableCombines;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableRegionsResponseBody\regions\region\availableCombines\availableCombine\zones;

class availableCombine extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var zones
     */
    public $zones;
    protected $_name = [
        'id' => 'Id',
        'zones' => 'Zones',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Zones'])) {
            $model->zones = zones::fromMap($map['Zones']);
        }

        return $model;
    }
}
