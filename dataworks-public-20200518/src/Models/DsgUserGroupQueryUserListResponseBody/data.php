<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgUserGroupQueryUserListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var int
     */
    public $accountType;

    /**
     * @var string
     */
    public $baseId;

    /**
     * @var string
     */
    public $parentAccountId;

    /**
     * @var string
     */
    public $yunAccount;
    protected $_name = [
        'accountName' => 'AccountName',
        'accountType' => 'AccountType',
        'baseId' => 'BaseId',
        'parentAccountId' => 'ParentAccountId',
        'yunAccount' => 'YunAccount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
