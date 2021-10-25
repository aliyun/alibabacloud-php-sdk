<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListNodesResponseBody\nodes\nodeInfo;

use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @var string[]
     */
    public $role;
    protected $_name = [
        'role' => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['Role'])) {
            if (!empty($map['Role'])) {
                $model->role = $map['Role'];
            }
        }

        return $model;
    }
}
