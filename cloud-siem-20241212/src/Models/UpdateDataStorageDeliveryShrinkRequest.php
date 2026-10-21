<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class UpdateDataStorageDeliveryShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $autoIncludeNewAccounts;

    /**
     * @var int
     */
    public $configurationVersion;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $logCode;

    /**
     * @var string
     */
    public $logDeliveryStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var string
     */
    public $selectedAccountIdsShrink;

    /**
     * @var int
     */
    public $subUserId;

    /**
     * @var string
     */
    public $targetProject;
    protected $_name = [
        'autoIncludeNewAccounts' => 'AutoIncludeNewAccounts',
        'configurationVersion' => 'ConfigurationVersion',
        'lang' => 'Lang',
        'logCode' => 'LogCode',
        'logDeliveryStatus' => 'LogDeliveryStatus',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'selectedAccountIdsShrink' => 'SelectedAccountIds',
        'subUserId' => 'SubUserId',
        'targetProject' => 'TargetProject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoIncludeNewAccounts) {
            $res['AutoIncludeNewAccounts'] = $this->autoIncludeNewAccounts;
        }

        if (null !== $this->configurationVersion) {
            $res['ConfigurationVersion'] = $this->configurationVersion;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }

        if (null !== $this->logDeliveryStatus) {
            $res['LogDeliveryStatus'] = $this->logDeliveryStatus;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->selectedAccountIdsShrink) {
            $res['SelectedAccountIds'] = $this->selectedAccountIdsShrink;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        if (null !== $this->targetProject) {
            $res['TargetProject'] = $this->targetProject;
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
        if (isset($map['AutoIncludeNewAccounts'])) {
            $model->autoIncludeNewAccounts = $map['AutoIncludeNewAccounts'];
        }

        if (isset($map['ConfigurationVersion'])) {
            $model->configurationVersion = $map['ConfigurationVersion'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }

        if (isset($map['LogDeliveryStatus'])) {
            $model->logDeliveryStatus = $map['LogDeliveryStatus'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['SelectedAccountIds'])) {
            $model->selectedAccountIdsShrink = $map['SelectedAccountIds'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        if (isset($map['TargetProject'])) {
            $model->targetProject = $map['TargetProject'];
        }

        return $model;
    }
}
