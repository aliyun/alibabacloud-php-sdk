<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\DeletePermissionRequest\members;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeletePermissionRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class DeletePermissionRequest extends Model
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
     * @var members[]
     */
    public $members;

    /**
     * @description This parameter is required.
     *
     * @example MANAGER
     *
     * @var string
     */
    public $roleId;

    /**
     * @var tenantContext
     */
    public $tenantContext;
    protected $_name = [
        'dentryUuid' => 'DentryUuid',
        'members' => 'Members',
        'roleId' => 'RoleId',
        'tenantContext' => 'TenantContext',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dentryUuid) {
            $res['DentryUuid'] = $this->dentryUuid;
        }
        if (null !== $this->members) {
            $res['Members'] = [];
            if (null !== $this->members && \is_array($this->members)) {
                $n = 0;
                foreach ($this->members as $item) {
                    $res['Members'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DentryUuid'])) {
            $model->dentryUuid = $map['DentryUuid'];
        }
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = [];
                $n = 0;
                foreach ($map['Members'] as $item) {
                    $model->members[$n++] = null !== $item ? members::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        return $model;
    }
}
