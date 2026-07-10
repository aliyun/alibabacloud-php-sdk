<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyLangfuseProjectMembershipResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'email' => 'Email',
        'role' => 'Role',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
