<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class EnableHanaBackupPlanRequest extends Model
{
    /**
     * @description The ID of the SAP HANA instance.
     *
     * This parameter is required.
     *
     * @example cl-0001zfcn******0pr3
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the backup plan.
     *
     * This parameter is required.
     *
     * @example plan-*********************
     *
     * @var string
     */
    public $planId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm4ebtpkzx7zy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the backup vault.
     *
     * This parameter is required.
     *
     * @example v-00030j3c******sn
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'planId' => 'PlanId',
        'resourceGroupId' => 'ResourceGroupId',
        'vaultId' => 'VaultId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
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
     * @return EnableHanaBackupPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
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
