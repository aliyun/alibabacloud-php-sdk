<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class AuthorizeSkillShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $permissionCodesShrink;
    protected $_name = [
        'permissionCodesShrink' => 'PermissionCodes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissionCodesShrink) {
            $res['PermissionCodes'] = $this->permissionCodesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeSkillShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionCodes'])) {
            $model->permissionCodesShrink = $map['PermissionCodes'];
        }

        return $model;
    }
}
