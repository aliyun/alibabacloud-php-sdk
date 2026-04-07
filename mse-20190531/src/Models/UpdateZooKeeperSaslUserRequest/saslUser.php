<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateZooKeeperSaslUserRequest;

use AlibabaCloud\Dara\Model;

class saslUser extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $originPassword;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'description' => 'Description',
        'originPassword' => 'OriginPassword',
        'password' => 'Password',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->originPassword) {
            $res['OriginPassword'] = $this->originPassword;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['OriginPassword'])) {
            $model->originPassword = $map['OriginPassword'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
