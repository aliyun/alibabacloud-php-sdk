<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\UpdateUserPermissionsRequest\body;
use AlibabaCloud\Tea\Model;

class UpdateUserPermissionsRequest extends Model
{
    /**
     * @description The request body.
     *
     * @var body[]
     */
    public $body;

    /**
     * @description The authorization method. Valid values:
     *
     *   `apply`: updates all permissions of the RAM user or RAM role. If you use this method, the existing permissions of the RAM user or RAM role on the cluster are overwritten. You must specify all the permissions that you want to grant to the RAM user or RAM role in the request parameters when you call the operation.
     *   `delete`: revokes the specified permissions from the RAM user or RAM role. If you use this method, only the permissions that you specify are revoked, other permissions of the RAM user or RAM role on the cluster are not affected.
     *   `patch`: grants the specified permissions to the RAM user or role. If you use this method, only the permissions that you specify are granted, other permissions of the RAM user or RAM role on the cluster are not affected.
     *
     * Default value: `apply`
     * @example apply
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'body' => 'body',
        'mode' => 'mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = [];
            if (null !== $this->body && \is_array($this->body)) {
                $n = 0;
                foreach ($this->body as $item) {
                    $res['body'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                $n           = 0;
                foreach ($map['body'] as $item) {
                    $model->body[$n++] = null !== $item ? body::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        return $model;
    }
}
