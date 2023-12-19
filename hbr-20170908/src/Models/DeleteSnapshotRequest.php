<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DeleteSnapshotRequest extends Model
{
    /**
     * @description The ID of the backup client. If you delete a backup file for Elastic Compute Service (ECS) instances, you must set one of the **InstanceId** and ClientId parameters.
     *
     * @example c-*********************
     *
     * @var string
     */
    public $clientId;

    /**
     * @description Specifies whether to forcibly delete the most recent backup file. Valid values:
     *
     *   true: The system forcibly deletes the last backup file.
     *   false: The system does not forcibly delete the last backup file. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description The ID of the ECS instance. If you delete a backup file for Elastic Compute Service (ECS) instances, you must set one of the **ClientId** and InstanceId parameters.
     *
     * @example i-*********************
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the backup file.
     *
     * @example s-*********************
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The type of the backup source. Valid values:
     *
     *   **ECS_FILE**: indicates backup files for ECS instances.
     *   **OSS**: indicates backup files for Object Storage Service (OSS) buckets.
     *   **NAS**: indicates the backup files for Apsara File Storage NAS file systems.
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The token.
     *
     * @example 02WJDOE7
     *
     * @var string
     */
    public $token;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-*********************
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'clientId'   => 'ClientId',
        'force'      => 'Force',
        'instanceId' => 'InstanceId',
        'snapshotId' => 'SnapshotId',
        'sourceType' => 'SourceType',
        'token'      => 'Token',
        'vaultId'    => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
