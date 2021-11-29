<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\UpdateUserRequest;

use AlibabaCloud\Tea\Model;

class userAccountParamList extends Model
{
    /**
     * @var string
     */
    public $accountPassword;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $authType;
    protected $_name = [
        'accountPassword' => 'AccountPassword',
        'accountType'     => 'AccountType',
        'authType'        => 'AuthType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userAccountParamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        return $model;
    }
}
