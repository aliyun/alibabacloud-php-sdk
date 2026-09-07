<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList\DBAccount\promqlInsertPrivileges;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList\DBAccount\promqlSelectNodes;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList\DBAccount\promqlSelectPrivileges;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList\DBAccount\ramUserList;

class DBAccount extends Model
{
    /**
     * @var string
     */
    public $accountDescription;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountStatus;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var promqlInsertPrivileges
     */
    public $promqlInsertPrivileges;

    /**
     * @var promqlSelectNodes
     */
    public $promqlSelectNodes;

    /**
     * @var promqlSelectPrivileges
     */
    public $promqlSelectPrivileges;

    /**
     * @var ramUserList
     */
    public $ramUserList;

    /**
     * @var string
     */
    public $ramUsers;

    /**
     * @var float
     */
    public $promqlSelectNodePercentage;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName' => 'AccountName',
        'accountStatus' => 'AccountStatus',
        'accountType' => 'AccountType',
        'engine' => 'Engine',
        'promqlInsertPrivileges' => 'PromqlInsertPrivileges',
        'promqlSelectNodes' => 'PromqlSelectNodes',
        'promqlSelectPrivileges' => 'PromqlSelectPrivileges',
        'ramUserList' => 'RamUserList',
        'ramUsers' => 'RamUsers',
        'promqlSelectNodePercentage' => 'promqlSelectNodePercentage',
    ];

    public function validate()
    {
        if (null !== $this->promqlInsertPrivileges) {
            $this->promqlInsertPrivileges->validate();
        }
        if (null !== $this->promqlSelectNodes) {
            $this->promqlSelectNodes->validate();
        }
        if (null !== $this->promqlSelectPrivileges) {
            $this->promqlSelectPrivileges->validate();
        }
        if (null !== $this->ramUserList) {
            $this->ramUserList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountDescription) {
            $res['AccountDescription'] = $this->accountDescription;
        }

        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->accountStatus) {
            $res['AccountStatus'] = $this->accountStatus;
        }

        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->promqlInsertPrivileges) {
            $res['PromqlInsertPrivileges'] = null !== $this->promqlInsertPrivileges ? $this->promqlInsertPrivileges->toArray($noStream) : $this->promqlInsertPrivileges;
        }

        if (null !== $this->promqlSelectNodes) {
            $res['PromqlSelectNodes'] = null !== $this->promqlSelectNodes ? $this->promqlSelectNodes->toArray($noStream) : $this->promqlSelectNodes;
        }

        if (null !== $this->promqlSelectPrivileges) {
            $res['PromqlSelectPrivileges'] = null !== $this->promqlSelectPrivileges ? $this->promqlSelectPrivileges->toArray($noStream) : $this->promqlSelectPrivileges;
        }

        if (null !== $this->ramUserList) {
            $res['RamUserList'] = null !== $this->ramUserList ? $this->ramUserList->toArray($noStream) : $this->ramUserList;
        }

        if (null !== $this->ramUsers) {
            $res['RamUsers'] = $this->ramUsers;
        }

        if (null !== $this->promqlSelectNodePercentage) {
            $res['promqlSelectNodePercentage'] = $this->promqlSelectNodePercentage;
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
        if (isset($map['AccountDescription'])) {
            $model->accountDescription = $map['AccountDescription'];
        }

        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AccountStatus'])) {
            $model->accountStatus = $map['AccountStatus'];
        }

        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['PromqlInsertPrivileges'])) {
            $model->promqlInsertPrivileges = promqlInsertPrivileges::fromMap($map['PromqlInsertPrivileges']);
        }

        if (isset($map['PromqlSelectNodes'])) {
            $model->promqlSelectNodes = promqlSelectNodes::fromMap($map['PromqlSelectNodes']);
        }

        if (isset($map['PromqlSelectPrivileges'])) {
            $model->promqlSelectPrivileges = promqlSelectPrivileges::fromMap($map['PromqlSelectPrivileges']);
        }

        if (isset($map['RamUserList'])) {
            $model->ramUserList = ramUserList::fromMap($map['RamUserList']);
        }

        if (isset($map['RamUsers'])) {
            $model->ramUsers = $map['RamUsers'];
        }

        if (isset($map['promqlSelectNodePercentage'])) {
            $model->promqlSelectNodePercentage = $map['promqlSelectNodePercentage'];
        }

        return $model;
    }
}
