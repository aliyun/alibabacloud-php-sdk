<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabaseUserPermssionsResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDatabaseUserPermssionsResponseBody\userPermissions\userPermission;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPermission) {
            $res['UserPermission'] = [];
            if (null !== $this->userPermission && \is_array($this->userPermission)) {
                $n = 0;
                foreach ($this->userPermission as $item) {
                    $res['UserPermission'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userPermissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPermission'])) {
            if (!empty($map['UserPermission'])) {
                $model->userPermission = [];
                $n                     = 0;
                foreach ($map['UserPermission'] as $item) {
                    $model->userPermission[$n++] = null !== $item ? userPermission::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
