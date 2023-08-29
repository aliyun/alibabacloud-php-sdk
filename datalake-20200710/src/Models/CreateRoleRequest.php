<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class CreateRoleRequest extends Model
{
    /**
     * @var RoleInput
     */
    public $body;
    protected $_name = [
        'body' => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = RoleInput::fromMap($map['body']);
        }

        return $model;
    }
}
