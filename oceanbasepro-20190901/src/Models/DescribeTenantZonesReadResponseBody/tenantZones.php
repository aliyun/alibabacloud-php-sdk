<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantZonesReadResponseBody;

use AlibabaCloud\Tea\Model;

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
     * @var bool
     */
    public $isReadOnlyAddressMaster;

    /**
     * @var string
     */
    public $isReadable;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'isElectable'             => 'IsElectable',
        'isPrimary'               => 'IsPrimary',
        'isReadOnlyAddressMaster' => 'IsReadOnlyAddressMaster',
        'isReadable'              => 'IsReadable',
        'zone'                    => 'Zone',
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
        if (null !== $this->isReadOnlyAddressMaster) {
            $res['IsReadOnlyAddressMaster'] = $this->isReadOnlyAddressMaster;
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
        if (isset($map['IsReadOnlyAddressMaster'])) {
            $model->isReadOnlyAddressMaster = $map['IsReadOnlyAddressMaster'];
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
