<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DeleteBackupSnapshotRequest;

use AlibabaCloud\Tea\Model;

class backupSnapshotList extends Model
{
    /**
     * @description The ID of the Cloud Backup client.
     *
     * >  You can call the [DescribeSnapshots](~~DescribeSnapshots~~) operation to query the ID.
     *
     * This parameter is required.
     *
     * @example c-000a4h33w14ka8xagb2s
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The ID of the server.
     *
     * This parameter is required.
     *
     * @example i-j6cj8vyajp1fo4atxkae
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region in which Security Center is deployed. Valid values:
     *
     *   **cn-hangzhou**: China (Hangzhou).
     *   **ap-southeast-1**: Singapore.
     *   **cn-beijing**: China (Beijing).
     *
     * This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the snapshot that you want to delete.
     *
     * >  You can call the [DescribeSnapshots](~~DescribeSnapshots~~) operation to query the ID.
     *
     * This parameter is required.
     *
     * @example s-000f9p6r5trm6u4dc1iq
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: Elastic Compute Service (ECS) files.
     *   **OSS**: Object Storage Service (OSS) buckets.
     *   **NAS**: File Storage NAS (NAS) file systems.
     *   **OTS_TABLE**: Tablestore instances.
     *
     * This parameter is required.
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The ID of the backup vault that is used in the restoration task.
     *
     * >  You can call the [DescribeSnapshots](~~DescribeSnapshots~~) operation to query the ID.
     *
     * This parameter is required.
     *
     * @example v-0004vhwcs2pmacfzrzt5
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'clientId' => 'ClientId',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'snapshotId' => 'SnapshotId',
        'sourceType' => 'SourceType',
        'vaultId' => 'VaultId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
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
     * @return backupSnapshotList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
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
