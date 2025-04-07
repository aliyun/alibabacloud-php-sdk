<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class IsvGetAppIdRequest extends Model
{
    /**
     * @description The permission.
     *
     * Valid values:
     *
     *   whatsapp_business_messaging: sending permission on WhatsApp messages
     *   ads_management: management permission on advertisements
     *   catalog_management: management permission on catalogs
     *
     * @example catalog_management
     *
     * @var string
     */
    public $permissions;

    /**
     * @description The type of the app. Valid value: WHATSAPP.
     *
     * This parameter is required.
     *
     * @example WHATSAPP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'permissions' => 'Permissions',
        'type' => 'Type',
    ];

    public function validate() {}

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
