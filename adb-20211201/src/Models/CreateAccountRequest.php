<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateAccountRequest extends Model
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
     * @var string[]
     */
    public $promqlInsertPrivileges;

    /**
     * @var float
     */
    public $promqlSelectNodePercentage;

    /**
     * @var string[]
     */
    public $promqlSelectPrivileges;

    /**
     * @var string[]
     */
    public $ramUserList;

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
        'promqlInsertPrivileges' => 'PromqlInsertPrivileges',
        'promqlSelectNodePercentage' => 'PromqlSelectNodePercentage',
        'promqlSelectPrivileges' => 'PromqlSelectPrivileges',
        'ramUserList' => 'RamUserList',
        'resourceGroupName' => 'ResourceGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->promqlInsertPrivileges)) {
            Model::validateArray($this->promqlInsertPrivileges);
        }
        if (\is_array($this->promqlSelectPrivileges)) {
            Model::validateArray($this->promqlSelectPrivileges);
        }
        if (\is_array($this->ramUserList)) {
            Model::validateArray($this->ramUserList);
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

        if (null !== $this->promqlInsertPrivileges) {
            if (\is_array($this->promqlInsertPrivileges)) {
                $res['PromqlInsertPrivileges'] = [];
                $n1 = 0;
                foreach ($this->promqlInsertPrivileges as $item1) {
                    $res['PromqlInsertPrivileges'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->promqlSelectNodePercentage) {
            $res['PromqlSelectNodePercentage'] = $this->promqlSelectNodePercentage;
        }

        if (null !== $this->promqlSelectPrivileges) {
            if (\is_array($this->promqlSelectPrivileges)) {
                $res['PromqlSelectPrivileges'] = [];
                $n1 = 0;
                foreach ($this->promqlSelectPrivileges as $item1) {
                    $res['PromqlSelectPrivileges'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ramUserList) {
            if (\is_array($this->ramUserList)) {
                $res['RamUserList'] = [];
                $n1 = 0;
                foreach ($this->ramUserList as $item1) {
                    $res['RamUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['PromqlInsertPrivileges'])) {
                $model->promqlInsertPrivileges = [];
                $n1 = 0;
                foreach ($map['PromqlInsertPrivileges'] as $item1) {
                    $model->promqlInsertPrivileges[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PromqlSelectNodePercentage'])) {
            $model->promqlSelectNodePercentage = $map['PromqlSelectNodePercentage'];
        }

        if (isset($map['PromqlSelectPrivileges'])) {
            if (!empty($map['PromqlSelectPrivileges'])) {
                $model->promqlSelectPrivileges = [];
                $n1 = 0;
                foreach ($map['PromqlSelectPrivileges'] as $item1) {
                    $model->promqlSelectPrivileges[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RamUserList'])) {
            if (!empty($map['RamUserList'])) {
                $model->ramUserList = [];
                $n1 = 0;
                foreach ($map['RamUserList'] as $item1) {
                    $model->ramUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
