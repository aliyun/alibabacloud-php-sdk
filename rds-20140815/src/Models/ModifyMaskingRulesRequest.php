<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyMaskingRulesRequest\ruleConfig;
use AlibabaCloud\Tea\Model;

class ModifyMaskingRulesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $DBInstanceName;

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
     * @description This parameter is required.
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'DBInstanceName'       => 'DBInstanceName',
        'defaultAlgo'          => 'DefaultAlgo',
        'enabled'              => 'Enabled',
        'maskingAlgo'          => 'MaskingAlgo',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ruleConfig'           => 'RuleConfig',
        'ruleName'             => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ruleConfig) {
            $res['RuleConfig'] = null !== $this->ruleConfig ? $this->ruleConfig->toMap() : null;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMaskingRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
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
