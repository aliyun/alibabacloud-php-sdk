<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;

class zones extends Model
{
    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vswitchId' => 'VswitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
