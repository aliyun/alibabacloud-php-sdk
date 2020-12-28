<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\AddUsersRequest;

use AlibabaCloud\Tea\Model;

class user extends Model
{
    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $group;
    protected $_name = [
        'password' => 'Password',
        'name'     => 'Name',
        'group'    => 'Group',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return user
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        return $model;
    }
}
