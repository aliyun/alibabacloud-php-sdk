<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series\seriesInfo;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series\seriesInfo\roles\compute;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series\seriesInfo\roles\login;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series\seriesInfo\roles\manager;
use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @description The list of recommended ECS instance types for compute nodes.
     *
     * @var compute
     */
    public $compute;

    /**
     * @description The list of recommended ECS instance types for logon nodes.
     *
     * @var login
     */
    public $login;

    /**
     * @description The list of recommended ECS instance types for management nodes.
     *
     * @var manager
     */
    public $manager;
    protected $_name = [
        'compute' => 'Compute',
        'login'   => 'Login',
        'manager' => 'Manager',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compute) {
            $res['Compute'] = null !== $this->compute ? $this->compute->toMap() : null;
        }
        if (null !== $this->login) {
            $res['Login'] = null !== $this->login ? $this->login->toMap() : null;
        }
        if (null !== $this->manager) {
            $res['Manager'] = null !== $this->manager ? $this->manager->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Compute'])) {
            $model->compute = compute::fromMap($map['Compute']);
        }
        if (isset($map['Login'])) {
            $model->login = login::fromMap($map['Login']);
        }
        if (isset($map['Manager'])) {
            $model->manager = manager::fromMap($map['Manager']);
        }

        return $model;
    }
}
