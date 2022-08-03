<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models;

use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListRolesForServiceResponseBody\roles;
use AlibabaCloud\Tea\Model;

class ListRolesForServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var roles
     */
    public $roles;
    protected $_name = [
        'requestId' => 'RequestId',
        'roles'     => 'Roles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRolesForServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }

        return $model;
    }
}
