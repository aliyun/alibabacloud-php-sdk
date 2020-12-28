<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListPreferredEcsTypesResponseBody\series;

use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @var string[]
     */
    public $manager;

    /**
     * @var string[]
     */
    public $compute;

    /**
     * @var string[]
     */
    public $login;
    protected $_name = [
        'manager' => 'Manager',
        'compute' => 'Compute',
        'login'   => 'Login',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->manager) {
            $res['Manager'] = $this->manager;
        }
        if (null !== $this->compute) {
            $res['Compute'] = $this->compute;
        }
        if (null !== $this->login) {
            $res['Login'] = $this->login;
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
        if (isset($map['Manager'])) {
            if (!empty($map['Manager'])) {
                $model->manager = $map['Manager'];
            }
        }
        if (isset($map['Compute'])) {
            if (!empty($map['Compute'])) {
                $model->compute = $map['Compute'];
            }
        }
        if (isset($map['Login'])) {
            if (!empty($map['Login'])) {
                $model->login = $map['Login'];
            }
        }

        return $model;
    }
}
