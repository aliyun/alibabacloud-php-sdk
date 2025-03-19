<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceResponseBody;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceResponseBody\dryRunResult\rolePolicy;
use AlibabaCloud\Tea\Model;

class dryRunResult extends Model
{
    /**
     * @description The required ram policy for deploying role.
     *
     * @var rolePolicy
     */
    public $rolePolicy;
    protected $_name = [
        'rolePolicy' => 'RolePolicy',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->rolePolicy) {
            $res['RolePolicy'] = null !== $this->rolePolicy ? $this->rolePolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dryRunResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RolePolicy'])) {
            $model->rolePolicy = rolePolicy::fromMap($map['RolePolicy']);
        }

        return $model;
    }
}
