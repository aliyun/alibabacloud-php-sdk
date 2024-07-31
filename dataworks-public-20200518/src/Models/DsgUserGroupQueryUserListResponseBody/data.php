<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgUserGroupQueryUserListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the user.
     *
     * @example user1
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The type of the user. Valid values:
     *
     *   1 to 5: Alibaba Cloud account
     *   6: RAM role
     *
     * @example 2
     *
     * @var int
     */
    public $accountType;

    /**
     * @description The user ID or role ID.
     *
     * @example 234
     *
     * @var string
     */
    public $baseId;

    /**
     * @description The parent user ID. This parameter is required if a RAM user is used.
     *
     * @example 123
     *
     * @var string
     */
    public $parentAccountId;

    /**
     * @description The name of the Alibaba Cloud account or RAM role. The return value of this parameter must be used if the user group is created by using an Alibaba Cloud account or a RAM role.
     *
     * @example user:user1
     *
     * @var string
     */
    public $yunAccount;
    protected $_name = [
        'accountName'     => 'AccountName',
        'accountType'     => 'AccountType',
        'baseId'          => 'BaseId',
        'parentAccountId' => 'ParentAccountId',
        'yunAccount'      => 'YunAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->baseId) {
            $res['BaseId'] = $this->baseId;
        }
        if (null !== $this->parentAccountId) {
            $res['ParentAccountId'] = $this->parentAccountId;
        }
        if (null !== $this->yunAccount) {
            $res['YunAccount'] = $this->yunAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['BaseId'])) {
            $model->baseId = $map['BaseId'];
        }
        if (isset($map['ParentAccountId'])) {
            $model->parentAccountId = $map['ParentAccountId'];
        }
        if (isset($map['YunAccount'])) {
            $model->yunAccount = $map['YunAccount'];
        }

        return $model;
    }
}
