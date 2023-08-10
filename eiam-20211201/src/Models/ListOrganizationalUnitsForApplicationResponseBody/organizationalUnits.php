<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListOrganizationalUnitsForApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class organizationalUnits extends Model
{
    /**
     * @description The ID of the organization that is allowed to access the application.
     *
     * @example ou_wovwffm62xifdziem7an7xxxxx
     *
     * @var string
     */
    public $organizationalUnitId;
    protected $_name = [
        'organizationalUnitId' => 'OrganizationalUnitId',
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

        return $model;
    }
}
