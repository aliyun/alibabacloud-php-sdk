<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserPermissionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserPermissionsResponseBody\userPermissions\userPermission;

class userPermissions extends Model
{
    /**
     * @var userPermission[]
     */
    public $userPermission;
    protected $_name = [
        'userPermission' => 'UserPermission',
    ];

    public function validate()
    {
        if (\is_array($this->userPermission)) {
            Model::validateArray($this->userPermission);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userPermission) {
            if (\is_array($this->userPermission)) {
                $res['UserPermission'] = [];
                $n1                    = 0;
                foreach ($this->userPermission as $item1) {
                    $res['UserPermission'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UserPermission'])) {
            if (!empty($map['UserPermission'])) {
                $model->userPermission = [];
                $n1                    = 0;
                foreach ($map['UserPermission'] as $item1) {
                    $model->userPermission[$n1++] = userPermission::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
