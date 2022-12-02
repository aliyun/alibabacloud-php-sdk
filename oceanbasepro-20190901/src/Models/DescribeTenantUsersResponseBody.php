<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantUsersResponseBody\tenantUsers;
use AlibabaCloud\Tea\Model;

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
        'requestId'   => 'RequestId',
        'tenantUsers' => 'TenantUsers',
        'totalCount'  => 'TotalCount',
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
        if (null !== $this->tenantUsers) {
            $res['TenantUsers'] = [];
            if (null !== $this->tenantUsers && \is_array($this->tenantUsers)) {
                $n = 0;
                foreach ($this->tenantUsers as $item) {
                    $res['TenantUsers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTenantUsersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TenantUsers'])) {
            if (!empty($map['TenantUsers'])) {
                $model->tenantUsers = [];
                $n                  = 0;
                foreach ($map['TenantUsers'] as $item) {
                    $model->tenantUsers[$n++] = null !== $item ? tenantUsers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
