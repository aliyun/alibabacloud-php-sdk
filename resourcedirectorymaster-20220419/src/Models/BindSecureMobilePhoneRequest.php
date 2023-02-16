<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class BindSecureMobilePhoneRequest extends Model
{
    /**
     * @example 138660628348****
     *
     * @var string
     */
    public $accountId;

    /**
     * @example xx-13900001234
     *
     * @var string
     */
    public $secureMobilePhone;

    /**
     * @example 123456
     *
     * @var string
     */
    public $verificationCode;
    protected $_name = [
        'accountId'         => 'AccountId',
        'secureMobilePhone' => 'SecureMobilePhone',
        'verificationCode'  => 'VerificationCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->secureMobilePhone) {
            $res['SecureMobilePhone'] = $this->secureMobilePhone;
        }
        if (null !== $this->verificationCode) {
            $res['VerificationCode'] = $this->verificationCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindSecureMobilePhoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['SecureMobilePhone'])) {
            $model->secureMobilePhone = $map['SecureMobilePhone'];
        }
        if (isset($map['VerificationCode'])) {
            $model->verificationCode = $map['VerificationCode'];
        }

        return $model;
    }
}
