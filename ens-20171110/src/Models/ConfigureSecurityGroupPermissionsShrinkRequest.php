<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ConfigureSecurityGroupPermissionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $authorizePermissionsShrink;

    /**
     * @var string
     */
    public $revokePermissionsShrink;

    /**
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'authorizePermissionsShrink' => 'AuthorizePermissions',
        'revokePermissionsShrink'    => 'RevokePermissions',
        'securityGroupId'            => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizePermissionsShrink) {
            $res['AuthorizePermissions'] = $this->authorizePermissionsShrink;
        }
        if (null !== $this->revokePermissionsShrink) {
            $res['RevokePermissions'] = $this->revokePermissionsShrink;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigureSecurityGroupPermissionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizePermissions'])) {
            $model->authorizePermissionsShrink = $map['AuthorizePermissions'];
        }
        if (isset($map['RevokePermissions'])) {
            $model->revokePermissionsShrink = $map['RevokePermissions'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
