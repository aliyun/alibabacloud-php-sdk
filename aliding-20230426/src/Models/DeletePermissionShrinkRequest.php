<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class DeletePermissionShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example a9E05BDRVQRkezKGCE3nlwPDJ63zgkYA
     *
     * @var string
     */
    public $dentryUuid;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $membersShrink;

    /**
     * @description This parameter is required.
     *
     * @example MANAGER
     *
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $tenantContextShrink;
    protected $_name = [
        'dentryUuid' => 'DentryUuid',
        'membersShrink' => 'Members',
        'roleId' => 'RoleId',
        'tenantContextShrink' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }
        if (null !== $this->membersShrink) {
            $res['Members'] = $this->membersShrink;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePermissionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }
        if (isset($map['Members'])) {
            $model->membersShrink = $map['Members'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        return $model;
    }
}
