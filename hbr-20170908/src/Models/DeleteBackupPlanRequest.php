<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DeleteBackupPlanRequest extends Model
{
    /**
     * @description The ID of the backup plan.
     *
     * This parameter is required.
     * @example plan-*********************
     *
     * @var string
     */
    public $planId;

    /**
     * @description Specifies whether no running jobs are required.
     *
     * @example false
     *
     * @var bool
     */
    public $requireNoRunningJobs;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: Elastic Compute Service (ECS) files
     *   **OSS**: Object Storage Service (OSS) buckets
     *   **NAS**: Apsara File Storage NAS file systems
     *   **UDM_ECS**: ECS instances
     *   **OTS**: Tablestore instances
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-*********************
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'planId'               => 'PlanId',
        'requireNoRunningJobs' => 'RequireNoRunningJobs',
        'sourceType'           => 'SourceType',
        'vaultId'              => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->requireNoRunningJobs) {
            $res['RequireNoRunningJobs'] = $this->requireNoRunningJobs;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBackupPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['RequireNoRunningJobs'])) {
            $model->requireNoRunningJobs = $map['RequireNoRunningJobs'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
