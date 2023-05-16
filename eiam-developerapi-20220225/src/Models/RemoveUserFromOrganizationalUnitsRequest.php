<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class RemoveUserFromOrganizationalUnitsRequest extends Model
{
    /**
     * @example [ou_wovwffm62xifdziem7an7xxxxx]
     *
     * @var string[]
     */
    public $organizationalUnitIds;
    protected $_name = [
        'organizationalUnitIds' => 'organizationalUnitIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationalUnitIds) {
            $res['organizationalUnitIds'] = $this->organizationalUnitIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveUserFromOrganizationalUnitsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['organizationalUnitIds'])) {
            if (!empty($map['organizationalUnitIds'])) {
                $model->organizationalUnitIds = $map['organizationalUnitIds'];
            }
        }

        return $model;
    }
}
