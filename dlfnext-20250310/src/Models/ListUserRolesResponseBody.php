<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListUserRolesResponseBody extends Model
{
    /**
     * @example token!
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @var Role[]
     */
    public $roles;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'roles' => 'roles',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->roles) {
            $res['roles'] = [];
            if (null !== $this->roles && \is_array($this->roles)) {
                $n = 0;
                foreach ($this->roles as $item) {
                    $res['roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserRolesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }
        if (isset($map['roles'])) {
            if (!empty($map['roles'])) {
                $model->roles = [];
                $n = 0;
                foreach ($map['roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? Role::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
