<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgUserGroupQueryUserListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example user1
     *
     * @var string
     */
    public $accountName;

    /**
     * @example 2
     *
     * @var int
     */
    public $accountType;

    /**
     * @example 234
     *
     * @var string
     */
    public $baseId;

    /**
     * @example 123
     *
     * @var string
     */
    public $parentAccountId;

    /**
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
