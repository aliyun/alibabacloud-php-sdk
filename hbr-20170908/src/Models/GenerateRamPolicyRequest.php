<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class GenerateRamPolicyRequest extends Model
{
    /**
     * @description The type of the policy that you want to generate. Valid values:
     *
     *   custom: custom policy
     *   system: system policy
     *
     * @example system
     *
     * @var string
     */
    public $actionType;

    /**
     * @description Specifies whether to generate the policy based on an existing instance-specific rule. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $requireBasePolicy;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-*********************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-0007al3m******7ao
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'actionType'        => 'ActionType',
        'requireBasePolicy' => 'RequireBasePolicy',
        'resourceGroupId'   => 'ResourceGroupId',
        'vaultId'           => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->requireBasePolicy) {
            $res['RequireBasePolicy'] = $this->requireBasePolicy;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateRamPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['RequireBasePolicy'])) {
            $model->requireBasePolicy = $map['RequireBasePolicy'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
