<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyDatabaseUserRolesResponseBody\tenantUser;
use AlibabaCloud\Tea\Model;

class ModifyDatabaseUserRolesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tenantUser
     */
    public $tenantUser;
    protected $_name = [
        'requestId'  => 'RequestId',
        'tenantUser' => 'TenantUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tenantUser) {
            $res['TenantUser'] = null !== $this->tenantUser ? $this->tenantUser->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDatabaseUserRolesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TenantUser'])) {
            $model->tenantUser = tenantUser::fromMap($map['TenantUser']);
        }

        return $model;
    }
}
