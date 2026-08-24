<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kvcachestore\V20260617\Models\ListKVCacheStoreAvailableHpnZonesResponseBody\instanceHpnZones;

use AlibabaCloud\Dara\Model;

class availableHpnZones extends Model
{
    /**
     * @var string
     */
    public $hpnZone;
    protected $_name = [
        'hpnZone' => 'HpnZone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hpnZone) {
            $res['HpnZone'] = $this->hpnZone;
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
        if (isset($map['HpnZone'])) {
            $model->hpnZone = $map['HpnZone'];
        }

        return $model;
    }
}
