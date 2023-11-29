<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantZonesReadResponseBody;

use AlibabaCloud\Tea\Model;

class tenantZones extends Model
{
    /**
     * @description Example 1
     *
     * @example true
     *
     * @var bool
     */
    public $isElectable;

    /**
     * @example true
     *
     * @var bool
     */
    public $isPrimary;

    /**
     * @example true
     *
     * @var string
     */
    public $isReadable;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zone;
    protected $_name = [
        'isElectable' => 'IsElectable',
        'isPrimary'   => 'IsPrimary',
        'isReadable'  => 'IsReadable',
        'zone'        => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return tenantZones
     */
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
