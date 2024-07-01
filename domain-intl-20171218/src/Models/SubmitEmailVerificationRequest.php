<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class SubmitEmailVerificationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $sendIfExist;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'email'        => 'Email',
        'lang'         => 'Lang',
        'sendIfExist'  => 'SendIfExist',
        'userClientIp' => 'UserClientIp',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sendIfExist) {
            $res['SendIfExist'] = $this->sendIfExist;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitEmailVerificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SendIfExist'])) {
            $model->sendIfExist = $map['SendIfExist'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
