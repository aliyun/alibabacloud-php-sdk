<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ModifyTenantUserStatusResponseBody\tenantUser;

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
        'requestId' => 'RequestId',
        'tenantUser' => 'TenantUser',
    ];

    public function validate()
    {
        if (\is_array($this->tenantUser)) {
            Model::validateArray($this->tenantUser);
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
            if (\is_array($this->tenantUser)) {
                $res['TenantUser'] = [];
                $n1 = 0;
                foreach ($this->tenantUser as $item1) {
                    $res['TenantUser'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['TenantUser'])) {
                $model->tenantUser = [];
                $n1 = 0;
                foreach ($map['TenantUser'] as $item1) {
                    $model->tenantUser[$n1++] = tenantUser::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
