<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetUserResponseBody\user;

use AlibabaCloud\Dara\Model;

class roleNameList extends Model
{
    /**
     * @var string[]
     */
    public $roleNames;
    protected $_name = [
        'roleNames' => 'RoleNames',
    ];

    public function validate()
    {
        if (\is_array($this->roleNames)) {
            Model::validateArray($this->roleNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleNames) {
            if (\is_array($this->roleNames)) {
                $res['RoleNames'] = [];
                $n1 = 0;
                foreach ($this->roleNames as $item1) {
                    $res['RoleNames'][$n1++] = $item1;
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
        if (isset($map['RoleNames'])) {
            if (!empty($map['RoleNames'])) {
                $model->roleNames = [];
                $n1 = 0;
                foreach ($map['RoleNames'] as $item1) {
                    $model->roleNames[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
