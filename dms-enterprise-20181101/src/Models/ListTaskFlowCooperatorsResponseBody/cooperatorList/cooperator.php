<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowCooperatorsResponseBody\cooperatorList;

use AlibabaCloud\Tea\Model;

class cooperator extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $nickName;
    protected $_name = [
        'email'     => 'Email',
        'loginName' => 'LoginName',
        'nickName'  => 'NickName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cooperator
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        return $model;
    }
}
