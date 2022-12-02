<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DeleteTenantsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $tenantIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'tenantIds' => 'TenantIds',
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
        if (null !== $this->tenantIds) {
            $res['TenantIds'] = $this->tenantIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTenantsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TenantIds'])) {
            if (!empty($map['TenantIds'])) {
                $model->tenantIds = $map['TenantIds'];
            }
        }

        return $model;
    }
}
