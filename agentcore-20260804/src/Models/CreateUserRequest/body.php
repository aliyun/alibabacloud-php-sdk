<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateUserRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $note;

    /**
     * @var string
     */
    public $password;
    protected $_name = [
        'displayName' => 'displayName',
        'email' => 'email',
        'name' => 'name',
        'note' => 'note',
        'password' => 'password',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->note) {
            $res['note'] = $this->note;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
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
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['note'])) {
            $model->note = $map['note'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        return $model;
    }
}
