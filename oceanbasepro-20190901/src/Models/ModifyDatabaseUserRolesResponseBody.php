<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyDatabaseUserRolesResponseBody\tenantUser;

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
        'requestId' => 'RequestId',
        'tenantUser' => 'TenantUser',
    ];

    public function validate()
    {
        if (null !== $this->tenantUser) {
            $this->tenantUser->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tenantUser) {
            $res['TenantUser'] = null !== $this->tenantUser ? $this->tenantUser->toArray($noStream) : $this->tenantUser;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
