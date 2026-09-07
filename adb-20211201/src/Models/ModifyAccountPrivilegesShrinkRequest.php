<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ModifyAccountPrivilegesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountPrivilegesShrink;

    /**
     * @var string
     */
    public $DBClusterId;

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
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupName;
    protected $_name = [
        'accountName' => 'AccountName',
        'accountPrivilegesShrink' => 'AccountPrivileges',
        'DBClusterId' => 'DBClusterId',
        'promqlInsertPrivilegesShrink' => 'PromqlInsertPrivileges',
        'promqlSelectNodePercentage' => 'PromqlSelectNodePercentage',
        'promqlSelectPrivilegesShrink' => 'PromqlSelectPrivileges',
        'regionId' => 'RegionId',
        'resourceGroupName' => 'ResourceGroupName',
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

        if (null !== $this->accountPrivilegesShrink) {
            $res['AccountPrivileges'] = $this->accountPrivilegesShrink;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AccountPrivileges'])) {
            $model->accountPrivilegesShrink = $map['AccountPrivileges'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        return $model;
    }
}
