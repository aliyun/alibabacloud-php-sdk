<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyImageRegistryRequest extends Model
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $password;
    /**
     * @var int
     */
    public $transPerHour;
    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'id'           => 'Id',
        'password'     => 'Password',
        'transPerHour' => 'TransPerHour',
        'userName'     => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->transPerHour) {
            $res['TransPerHour'] = $this->transPerHour;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['TransPerHour'])) {
            $model->transPerHour = $map['TransPerHour'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
