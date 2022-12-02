<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserStatusResponseBody\tenantUser;
use AlibabaCloud\Tea\Model;

class ModifyTenantUserStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tenantUser[]
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
            $res['TenantUser'] = [];
            if (null !== $this->tenantUser && \is_array($this->tenantUser)) {
                $n = 0;
                foreach ($this->tenantUser as $item) {
                    $res['TenantUser'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTenantUserStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TenantUser'])) {
            if (!empty($map['TenantUser'])) {
                $model->tenantUser = [];
                $n                 = 0;
                foreach ($map['TenantUser'] as $item) {
                    $model->tenantUser[$n++] = null !== $item ? tenantUser::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
