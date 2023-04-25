<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetTurnCredentialsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example M0NQNG/uRUrfIxW7er/S9gKX****
     *
     * @var string
     */
    public $password;

    /**
     * @example 1602585817:****
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'password' => 'Password',
        'userName' => 'UserName',
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
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
