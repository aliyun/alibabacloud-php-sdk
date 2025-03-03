<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;

class SendVerificationCodeForBindSecureMobilePhoneRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;
    /**
     * @var string
     */
    public $secureMobilePhone;
    protected $_name = [
        'accountId'         => 'AccountId',
        'secureMobilePhone' => 'SecureMobilePhone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
