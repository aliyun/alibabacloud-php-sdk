<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DeleteHanaBackupPlanRequest extends Model
{
    /**
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-000br3******0ooy2
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the backup plan.
     *
     * @example pl-00035lc8pwp1azdf3qku
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
     * @example v-0007o******1ssno
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'planId'          => 'PlanId',
        'resourceGroupId' => 'ResourceGroupId',
        'vaultId'         => 'VaultId',
    ];

    public function validate()
    {
    }

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
     * @return DeleteHanaBackupPlanRequest
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
