<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateAccountShrinkRequest extends Model
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
    public $accountPassword;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $promqlInsertPrivilegesShrink;

    /**
     * @var float
     */
    public $promqlSelectNodePercentage;

    /**
     * @var string
     */
    public $promqlSelectPrivilegesShrink;

    /**
     * @var string
     */
    public $ramUserListShrink;

    /**
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'accountDescription' => 'AccountDescription',
        'accountName' => 'AccountName',
        'accountPassword' => 'AccountPassword',
        'accountType' => 'AccountType',
        'DBClusterId' => 'DBClusterId',
        'engine' => 'Engine',
        'promqlInsertPrivilegesShrink' => 'PromqlInsertPrivileges',
        'promqlSelectNodePercentage' => 'PromqlSelectNodePercentage',
        'promqlSelectPrivilegesShrink' => 'PromqlSelectPrivileges',
        'ramUserListShrink' => 'RamUserList',
        'resourceGroupName' => 'ResourceGroupName',
    ];

    public function validate()
    {
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

        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }

        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->promqlInsertPrivilegesShrink) {
            $res['PromqlInsertPrivileges'] = $this->promqlInsertPrivilegesShrink;
        }

        if (null !== $this->promqlSelectNodePercentage) {
            $res['PromqlSelectNodePercentage'] = $this->promqlSelectNodePercentage;
        }

        if (null !== $this->promqlSelectPrivilegesShrink) {
            $res['PromqlSelectPrivileges'] = $this->promqlSelectPrivilegesShrink;
        }

        if (null !== $this->ramUserListShrink) {
            $res['RamUserList'] = $this->ramUserListShrink;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
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

        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }

        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['PromqlInsertPrivileges'])) {
            $model->promqlInsertPrivilegesShrink = $map['PromqlInsertPrivileges'];
        }

        if (isset($map['PromqlSelectNodePercentage'])) {
            $model->promqlSelectNodePercentage = $map['PromqlSelectNodePercentage'];
        }

        if (isset($map['PromqlSelectPrivileges'])) {
            $model->promqlSelectPrivilegesShrink = $map['PromqlSelectPrivileges'];
        }

        if (isset($map['RamUserList'])) {
            $model->ramUserListShrink = $map['RamUserList'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
