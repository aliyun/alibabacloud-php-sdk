<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Tea\Model;

class ListPermissionsResponseBody extends Model
{
    /**
     * @example token!
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @var Permission[]
     */
    public $permissions;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'permissions' => 'permissions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->permissions) {
            $res['permissions'] = [];
            if (null !== $this->permissions && \is_array($this->permissions)) {
                $n = 0;
                foreach ($this->permissions as $item) {
                    $res['permissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }
        if (isset($map['permissions'])) {
            if (!empty($map['permissions'])) {
                $model->permissions = [];
                $n = 0;
                foreach ($map['permissions'] as $item) {
                    $model->permissions[$n++] = null !== $item ? Permission::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
