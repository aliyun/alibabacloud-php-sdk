<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\ConfigureSecurityGroupPermissionsRequest\authorizePermissions;
use AlibabaCloud\SDK\Ens\V20171110\Models\ConfigureSecurityGroupPermissionsRequest\revokePermissions;
use AlibabaCloud\Tea\Model;

class ConfigureSecurityGroupPermissionsRequest extends Model
{
    /**
     * @var authorizePermissions[]
     */
    public $authorizePermissions;

    /**
     * @var revokePermissions[]
     */
    public $revokePermissions;

    /**
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'authorizePermissions' => 'AuthorizePermissions',
        'revokePermissions'    => 'RevokePermissions',
        'securityGroupId'      => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizePermissions) {
            $res['AuthorizePermissions'] = [];
            if (null !== $this->authorizePermissions && \is_array($this->authorizePermissions)) {
                $n = 0;
                foreach ($this->authorizePermissions as $item) {
                    $res['AuthorizePermissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->revokePermissions) {
            $res['RevokePermissions'] = [];
            if (null !== $this->revokePermissions && \is_array($this->revokePermissions)) {
                $n = 0;
                foreach ($this->revokePermissions as $item) {
                    $res['RevokePermissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigureSecurityGroupPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizePermissions'])) {
            if (!empty($map['AuthorizePermissions'])) {
                $model->authorizePermissions = [];
                $n                           = 0;
                foreach ($map['AuthorizePermissions'] as $item) {
                    $model->authorizePermissions[$n++] = null !== $item ? authorizePermissions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RevokePermissions'])) {
            if (!empty($map['RevokePermissions'])) {
                $model->revokePermissions = [];
                $n                        = 0;
                foreach ($map['RevokePermissions'] as $item) {
                    $model->revokePermissions[$n++] = null !== $item ? revokePermissions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
