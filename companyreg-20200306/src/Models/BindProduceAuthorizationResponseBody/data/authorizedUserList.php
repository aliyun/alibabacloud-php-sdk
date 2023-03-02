<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models\BindProduceAuthorizationResponseBody\data;

use AlibabaCloud\Tea\Model;

class authorizedUserList extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $accountValidType;

    /**
     * @example 1219541161213058
     *
     * @var string
     */
    public $userId;

    /**
     * @example test@alibaba-inc.com
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'accountValidType' => 'AccountValidType',
        'userId'           => 'UserId',
        'userName'         => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountValidType) {
            $res['AccountValidType'] = $this->accountValidType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizedUserList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountValidType'])) {
            $model->accountValidType = $map['AccountValidType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
