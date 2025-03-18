<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\GetUserResponseBody;

use AlibabaCloud\Tea\Model;

class organizationalUnits extends Model
{
    /**
     * @description The ID of the organizational unit.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $organizationalUnitId;

    /**
     * @description The name of the organizational unit.
     *
     * @example name001
     *
     * @var string
     */
    public $organizationalUnitName;

    /**
     * @description Indicates whether the organizational unit is the primary organizational unit.
     *
     * @example true
     *
     * @var bool
     */
    public $primary;
    protected $_name = [
        'organizationalUnitId' => 'organizationalUnitId',
        'organizationalUnitName' => 'organizationalUnitName',
        'primary' => 'primary',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationalUnitId) {
            $res['organizationalUnitId'] = $this->organizationalUnitId;
        }
        if (null !== $this->organizationalUnitName) {
            $res['organizationalUnitName'] = $this->organizationalUnitName;
        }
        if (null !== $this->primary) {
            $res['primary'] = $this->primary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return organizationalUnits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['organizationalUnitId'])) {
            $model->organizationalUnitId = $map['organizationalUnitId'];
        }
        if (isset($map['organizationalUnitName'])) {
            $model->organizationalUnitName = $map['organizationalUnitName'];
        }
        if (isset($map['primary'])) {
            $model->primary = $map['primary'];
        }

        return $model;
    }
}
