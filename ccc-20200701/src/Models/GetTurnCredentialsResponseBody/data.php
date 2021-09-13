<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetTurnCredentialsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $password;
    protected $_name = [
        'userName' => 'UserName',
        'password' => 'Password',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
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
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        return $model;
    }
}
