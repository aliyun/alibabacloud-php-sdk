<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DisableBackupPlanRequest extends Model
{
    /**
     * @description The ID of the backup plan.
     *
     * @example plan-*********************
     *
     * @var string
     */
    public $planId;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: The system backs up data from Elastic Compute Service (ECS) instances.
     *   **OSS**: The system backs up data from Object Storage Service (OSS) buckets.
     *   **NAS**: The system backs up data from Apsara File Storage NAS file systems.
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
        'planId'     => 'PlanId',
        'sourceType' => 'SourceType',
        'vaultId'    => 'VaultId',
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
     * @return DisableBackupPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
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
