<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceProjectAddableUsersResponseBody;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @example xx@aliyuncs.com
     *
     * @var string
     */
    public $accountName;

    /**
     * @example test
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 30012011
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'accountName' => 'AccountName',
        'displayName' => 'DisplayName',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
