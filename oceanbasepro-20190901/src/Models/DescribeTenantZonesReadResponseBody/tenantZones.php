<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantZonesReadResponseBody;

use AlibabaCloud\Dara\Model;

class tenantZones extends Model
{
    /**
     * @var bool
     */
    public $isElectable;

    /**
     * @var bool
     */
    public $isPrimary;

    /**
     * @var string
     */
    public $isReadable;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'isElectable' => 'IsElectable',
        'isPrimary' => 'IsPrimary',
        'isReadable' => 'IsReadable',
        'zone' => 'Zone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isElectable) {
            $res['IsElectable'] = $this->isElectable;
        }

        if (null !== $this->isPrimary) {
            $res['IsPrimary'] = $this->isPrimary;
        }

        if (null !== $this->isReadable) {
            $res['IsReadable'] = $this->isReadable;
        }

        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
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
        if (isset($map['IsElectable'])) {
            $model->isElectable = $map['IsElectable'];
        }

        if (isset($map['IsPrimary'])) {
            $model->isPrimary = $map['IsPrimary'];
        }

        if (isset($map['IsReadable'])) {
            $model->isReadable = $map['IsReadable'];
        }

        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
