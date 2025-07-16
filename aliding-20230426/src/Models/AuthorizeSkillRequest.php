<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeSkillRequest extends Model
{
    /**
     * @var string[]
     */
    public $permissionCodes;
    protected $_name = [
        'permissionCodes' => 'PermissionCodes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissionCodes) {
            $res['PermissionCodes'] = $this->permissionCodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeSkillRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionCodes'])) {
            if (!empty($map['PermissionCodes'])) {
                $model->permissionCodes = $map['PermissionCodes'];
            }
        }

        return $model;
    }
}
