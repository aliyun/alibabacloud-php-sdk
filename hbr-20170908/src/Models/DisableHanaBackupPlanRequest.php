<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DisableHanaBackupPlanRequest extends Model
{
    /**
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-0003tu******y5oc
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the backup plan.
     *
     * @example pl-0006o11ectqr650ceoct
     *
     * @var string
     */
    public $planId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm3erpwweavki
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-000f9z******vilrr
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
     * @return DisableHanaBackupPlanRequest
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
