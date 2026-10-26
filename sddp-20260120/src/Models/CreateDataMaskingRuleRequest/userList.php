<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models\CreateDataMaskingRuleRequest;

use AlibabaCloud\Dara\Model;

class userList extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $authDb;
    protected $_name = [
        'accountId' => 'AccountId',
        'authDb' => 'AuthDb',
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

        if (null !== $this->authDb) {
            $res['AuthDb'] = $this->authDb;
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

        if (isset($map['AuthDb'])) {
            $model->authDb = $map['AuthDb'];
        }

        return $model;
    }
}
