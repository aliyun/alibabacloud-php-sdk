<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceResponseBody\dryRunResult\rolePolicy;

class dryRunResult extends Model
{
    /**
     * @var rolePolicy
     */
    public $rolePolicy;
    protected $_name = [
        'rolePolicy' => 'RolePolicy',
    ];

    public function validate()
    {
        if (null !== $this->rolePolicy) {
            $this->rolePolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rolePolicy) {
            $res['RolePolicy'] = null !== $this->rolePolicy ? $this->rolePolicy->toArray($noStream) : $this->rolePolicy;
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
        if (isset($map['RolePolicy'])) {
            $model->rolePolicy = rolePolicy::fromMap($map['RolePolicy']);
        }

        return $model;
    }
}
