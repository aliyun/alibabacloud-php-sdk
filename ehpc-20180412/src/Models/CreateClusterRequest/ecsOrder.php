<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest;

use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\ecsOrder\compute;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\ecsOrder\login;
use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\ecsOrder\manager;
use AlibabaCloud\Tea\Model;

class ecsOrder extends Model
{
    /**
     * @var manager
     */
    public $manager;

    /**
     * @var compute
     */
    public $compute;

    /**
     * @var login
     */
    public $login;
    protected $_name = [
        'manager' => 'Manager',
        'compute' => 'Compute',
        'login'   => 'Login',
    ];

    public function validate()
    {
        Model::validateRequired('manager', $this->manager, true);
        Model::validateRequired('compute', $this->compute, true);
        Model::validateRequired('login', $this->login, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->manager) {
            $res['Manager'] = null !== $this->manager ? $this->manager->toMap() : null;
        }
        if (null !== $this->compute) {
            $res['Compute'] = null !== $this->compute ? $this->compute->toMap() : null;
        }
        if (null !== $this->login) {
            $res['Login'] = null !== $this->login ? $this->login->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Manager'])) {
            $model->manager = manager::fromMap($map['Manager']);
        }
        if (isset($map['Compute'])) {
            $model->compute = compute::fromMap($map['Compute']);
        }
        if (isset($map['Login'])) {
            $model->login = login::fromMap($map['Login']);
        }

        return $model;
    }
}
