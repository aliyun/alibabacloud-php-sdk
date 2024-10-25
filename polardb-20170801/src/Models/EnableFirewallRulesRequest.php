<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class EnableFirewallRulesRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example pc-************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description Specifies whether to enable or disable the specified firewall rules. Valid values:
     *
     *   **true**: enables the specified firewall rules.
     *   **false**: disables the specified firewall rules.
     *
     * > This parameter is valid only when you specify the **RuleNameList** parameter.
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
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
     * @description The name of the firewall rule that you want to enable for the cluster. You can specify multiple firewall rules at a time. Separate multiple rules with commas (,).
     *
     * > You can call the **DescribeFirewallRules** operation to query the details of all firewall rules that are applicable to a cluster, such as rule names.
     *
     * This parameter is required.
     * @example test111
     *
     * @var string
     */
    public $ruleNameList;
    protected $_name = [
        'DBClusterId'          => 'DBClusterId',
        'enable'               => 'Enable',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ruleNameList'         => 'RuleNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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
        if (null !== $this->ruleNameList) {
            $res['RuleNameList'] = $this->ruleNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableFirewallRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
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
        if (isset($map['RuleNameList'])) {
            $model->ruleNameList = $map['RuleNameList'];
        }

        return $model;
    }
}
