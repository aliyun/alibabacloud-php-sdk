<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetUserResponseBody\user;

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
     * @example test_ou_name
     *
     * @var string
     */
    public $organizationalUnitName;

    /**
     * @description Indicates whether the organization is the primary organization.
     *
     * @example true
     *
     * @var bool
     */
    public $primary;
    protected $_name = [
        'organizationalUnitId'   => 'OrganizationalUnitId',
        'organizationalUnitName' => 'OrganizationalUnitName',
        'primary'                => 'Primary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationalUnitId) {
            $res['OrganizationalUnitId'] = $this->organizationalUnitId;
        }
        if (null !== $this->organizationalUnitName) {
            $res['OrganizationalUnitName'] = $this->organizationalUnitName;
        }
        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
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
        if (isset($map['OrganizationalUnitId'])) {
            $model->organizationalUnitId = $map['OrganizationalUnitId'];
        }
        if (isset($map['OrganizationalUnitName'])) {
            $model->organizationalUnitName = $map['OrganizationalUnitName'];
        }
        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }

        return $model;
    }
}
