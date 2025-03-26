<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyMaskingRulesRequest\ruleConfig;

class ModifyMaskingRulesRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $DBName;

    /**
     * @var string
     */
    public $defaultAlgo;

    /**
     * @var string
     */
    public $enabled;

    /**
     * @var string
     */
    public $maskingAlgo;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var ruleConfig
     */
    public $ruleConfig;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'DBName' => 'DBName',
        'defaultAlgo' => 'DefaultAlgo',
        'enabled' => 'Enabled',
        'maskingAlgo' => 'MaskingAlgo',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ruleConfig' => 'RuleConfig',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
        if (null !== $this->ruleConfig) {
            $this->ruleConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }

        if (null !== $this->defaultAlgo) {
            $res['DefaultAlgo'] = $this->defaultAlgo;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->maskingAlgo) {
            $res['MaskingAlgo'] = $this->maskingAlgo;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->ruleConfig) {
            $res['RuleConfig'] = null !== $this->ruleConfig ? $this->ruleConfig->toArray($noStream) : $this->ruleConfig;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }

        if (isset($map['DefaultAlgo'])) {
            $model->defaultAlgo = $map['DefaultAlgo'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['MaskingAlgo'])) {
            $model->maskingAlgo = $map['MaskingAlgo'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['RuleConfig'])) {
            $model->ruleConfig = ruleConfig::fromMap($map['RuleConfig']);
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
