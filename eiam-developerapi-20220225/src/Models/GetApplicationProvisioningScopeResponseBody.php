<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Tea\Model;

class GetApplicationProvisioningScopeResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $groupIds;

    /**
     * @description The IDs of organizational units.
     *
     * @example [ou_xxx001]
     *
     * @var string[]
     */
    public $organizationalUnitIds;
    protected $_name = [
        'groupIds' => 'groupIds',
        'organizationalUnitIds' => 'organizationalUnitIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupIds) {
            $res['groupIds'] = $this->groupIds;
        }
        if (null !== $this->organizationalUnitIds) {
            $res['organizationalUnitIds'] = $this->organizationalUnitIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApplicationProvisioningScopeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupIds'])) {
            if (!empty($map['groupIds'])) {
                $model->groupIds = $map['groupIds'];
            }
        }
        if (isset($map['organizationalUnitIds'])) {
            if (!empty($map['organizationalUnitIds'])) {
                $model->organizationalUnitIds = $map['organizationalUnitIds'];
            }
        }

        return $model;
    }
}
