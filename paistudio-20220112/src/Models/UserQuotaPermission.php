<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class UserQuotaPermission extends Model
{
    /**
     * @var string[]
     */
    public $permissions;

    /**
     * @var string
     */
    public $quotaId;
    protected $_name = [
        'permissions' => 'Permissions',
        'quotaId'     => 'QuotaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissions) {
            $res['Permissions'] = $this->permissions;
        }
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UserQuotaPermission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Permissions'])) {
            if (!empty($map['Permissions'])) {
                $model->permissions = $map['Permissions'];
            }
        }
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }

        return $model;
    }
}
