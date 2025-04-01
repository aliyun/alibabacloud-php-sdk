<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUsersResponseBody\tenantUsers;

class DescribeTenantUsersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tenantUsers[]
     */
    public $tenantUsers;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'tenantUsers' => 'TenantUsers',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->tenantUsers)) {
            Model::validateArray($this->tenantUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tenantUsers) {
            if (\is_array($this->tenantUsers)) {
                $res['TenantUsers'] = [];
                $n1 = 0;
                foreach ($this->tenantUsers as $item1) {
                    $res['TenantUsers'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['TenantUsers'])) {
            if (!empty($map['TenantUsers'])) {
                $model->tenantUsers = [];
                $n1 = 0;
                foreach ($map['TenantUsers'] as $item1) {
                    $model->tenantUsers[$n1++] = tenantUsers::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
