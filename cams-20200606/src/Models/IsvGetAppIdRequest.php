<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class IsvGetAppIdRequest extends Model
{
    /**
     * @var string
     */
    public $permissions;

    /**
     * @description The type of the application. Set the value to WHATSAPP.
     *
     * @example WHATSAPP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'permissions' => 'Permissions',
        'type'        => 'Type',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsvGetAppIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Permissions'])) {
            $model->permissions = $map['Permissions'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
