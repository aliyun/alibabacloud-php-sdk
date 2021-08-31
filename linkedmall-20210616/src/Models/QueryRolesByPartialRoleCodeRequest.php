<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20210616\Models;

use AlibabaCloud\Tea\Model;

class QueryRolesByPartialRoleCodeRequest extends Model
{
    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $partialRoleCode;
    protected $_name = [
        'tenantId'        => 'TenantId',
        'partialRoleCode' => 'PartialRoleCode',
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
        if (null !== $this->partialRoleCode) {
            $res['PartialRoleCode'] = $this->partialRoleCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRolesByPartialRoleCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['PartialRoleCode'])) {
            $model->partialRoleCode = $map['PartialRoleCode'];
        }

        return $model;
    }
}
