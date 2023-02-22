<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class SendVerificationCodeForBindSecureMobilePhoneRequest extends Model
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
    protected $_name = [
        'accountId'         => 'AccountId',
        'secureMobilePhone' => 'SecureMobilePhone',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendVerificationCodeForBindSecureMobilePhoneRequest
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

        return $model;
    }
}
