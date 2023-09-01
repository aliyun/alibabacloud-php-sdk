<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListPermissionsResponseBody;

use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListPermissionsResponseBody\permissions\permissionRules;
use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @example PaiDLC:GetTensorboard
     *
     * @var string
     */
    public $permissionCode;

    /**
     * @var permissionRules[]
     */
    public $permissionRules;
    protected $_name = [
        'permissionCode'  => 'PermissionCode',
        'permissionRules' => 'PermissionRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permissionCode) {
            $res['PermissionCode'] = $this->permissionCode;
        }
        if (null !== $this->permissionRules) {
            $res['PermissionRules'] = [];
            if (null !== $this->permissionRules && \is_array($this->permissionRules)) {
                $n = 0;
                foreach ($this->permissionRules as $item) {
                    $res['PermissionRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PermissionCode'])) {
            $model->permissionCode = $map['PermissionCode'];
        }
        if (isset($map['PermissionRules'])) {
            if (!empty($map['PermissionRules'])) {
                $model->permissionRules = [];
                $n                      = 0;
                foreach ($map['PermissionRules'] as $item) {
                    $model->permissionRules[$n++] = null !== $item ? permissionRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
