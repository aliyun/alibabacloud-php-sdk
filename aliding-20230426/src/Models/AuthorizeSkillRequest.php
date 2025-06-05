<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class AuthorizeSkillRequest extends Model
{
    /**
     * @var string[]
     */
    public $permissionCodes;
    protected $_name = [
        'permissionCodes' => 'PermissionCodes',
    ];

    public function validate()
    {
        if (\is_array($this->permissionCodes)) {
            Model::validateArray($this->permissionCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permissionCodes) {
            if (\is_array($this->permissionCodes)) {
                $res['PermissionCodes'] = [];
                $n1 = 0;
                foreach ($this->permissionCodes as $item1) {
                    $res['PermissionCodes'][$n1++] = $item1;
                }
            }
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
        if (isset($map['PermissionCodes'])) {
            if (!empty($map['PermissionCodes'])) {
                $model->permissionCodes = [];
                $n1 = 0;
                foreach ($map['PermissionCodes'] as $item1) {
                    $model->permissionCodes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
