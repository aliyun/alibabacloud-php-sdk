<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserStatusResponseBody;

use AlibabaCloud\Tea\Model;

class tenantUser extends Model
{
    /**
     * @description The ID of the tenant.
     *
     * @example t33h8y08k****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The name of the account.
     *
     * @example pay_test
     *
     * @var string
     */
    public $userName;

    /**
     * @description The status of the database account. Valid values:
     * - ONLINE: The account is unlocked.
     * @example LOCKED
     *
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'tenantId'   => 'TenantId',
        'userName'   => 'UserName',
        'userStatus' => 'UserStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
