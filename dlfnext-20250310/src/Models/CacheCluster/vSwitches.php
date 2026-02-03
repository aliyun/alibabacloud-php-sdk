<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models\CacheCluster;

use AlibabaCloud\Dara\Model;

class vSwitches extends Model
{
    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'vSwitchId' => 'vSwitchId',
        'zone' => 'zone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zone) {
            $res['zone'] = $this->zone;
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
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }

        if (isset($map['zone'])) {
            $model->zone = $map['zone'];
        }

        return $model;
    }
}
