<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class DeleteRoleRequest extends Model
{
    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'roleName' => 'RoleName',
    ];

    public function validate()
    {
        Model::validateRequired('roleName', $this->roleName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
