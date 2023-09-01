<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology\items;

use AlibabaCloud\Tea\Model;

class azoneRoleList extends Model
{
    /**
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $azone;

    /**
     * @example leader
     *
     * @var string
     */
    public $role;
    protected $_name = [
        'azone' => 'Azone',
        'role'  => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azone) {
            $res['Azone'] = $this->azone;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return azoneRoleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Azone'])) {
            $model->azone = $map['Azone'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
