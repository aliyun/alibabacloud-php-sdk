<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Teambitionaliyun\V20200226\Models;

use AlibabaCloud\Tea\Model;

class InsertDevopsMemberRequest extends Model
{
    /**
     * @var string
     */
    public $userPk;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $email;
    protected $_name = [
        'userPk'   => 'UserPk',
        'userName' => 'UserName',
        'phone'    => 'Phone',
        'email'    => 'Email',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPk) {
            $res['UserPk'] = $this->userPk;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertDevopsMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserPk'])) {
            $model->userPk = $map['UserPk'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        return $model;
    }
}
