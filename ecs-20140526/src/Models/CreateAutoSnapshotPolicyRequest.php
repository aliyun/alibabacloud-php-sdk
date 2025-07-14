<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoSnapshotPolicyRequest\copyEncryptionConfiguration;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoSnapshotPolicyRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateAutoSnapshotPolicyRequest extends Model
{
    /**
     * @description The retention period of the snapshot copy in the destination region. Unit: days. Valid values:
     *
     *   \\-1: The snapshot copy is retained until it is deleted.
     *   1 to 65535: The snapshot copy is retained for the specified number of days. After the retention period of the snapshot copy expires, the snapshot copy is automatically deleted.
     *
     * Default value: -1.
     *
     * @example 30
     *
     * @var int
     */
    public $copiedSnapshotsRetentionDays;

    /**
     * @description The encryption parameters for cross-region snapshot replication.
     *
     * @var copyEncryptionConfiguration
     */
    public $copyEncryptionConfiguration;

    /**
     * @description Specifies whether to enable cross-region replication for snapshots.
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $enableCrossRegionCopy;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The resource group ID.
     *
     * @example rg-aek2kkmhmhs****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description > This parameter is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $storageLocationArn;

    /**
     * @description The tags to add to the automatic snapshot policy.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The destination region to which to copy the snapshot. You can specify only a single destination region.
     *
     * @example ["cn-hangzhou"]
     *
     * @var string
     */
    public $targetCopyRegions;

    /**
     * @description The name of the automatic snapshot policy. The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with http:// or https://. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * By default, this parameter is left empty.
     *
     * @example TestName
     *
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @description The ID of the region in which to create the automatic snapshot policy. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The days of the week on which to create automatic snapshots. Valid values: 1 to 7, which correspond to Monday to Sunday. 1 indicates Monday. Format description:
     *
     *   Set this parameter to a JSON-formatted array. For example, a value of ["1"] specifies automatic snapshots to be created every Monday.
     *   To schedule multiple automatic snapshots to be created in a week, you can specify multiple values. Separate the values with commas (,). You can specify a maximum of seven days. For example, a value of ["1","3","5"] specifies automatic snapshots to be created every Monday, Wednesday, and Friday.
     *
     * This parameter is required.
     *
     * @example ["1","2"]
     *
     * @var string
     */
    public $repeatWeekdays;

    /**
     * @description The retention period of the automatic snapshot. Unit: days. Valid values:
     *
     *   \\-1: The automatic snapshot is retained until it is deleted.
     *   1 to 65535: The automatic snapshot is retained for the specified number of days. After the retention period of the automatic snapshot expires, the automatic snapshot is automatically deleted.
     *
     * Default value: -1.
     *
     * This parameter is required.
     *
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The points in time of the day at which to create automatic snapshots. The time must be in UTC+8. Unit: hours. Valid values: 0 to 23, which correspond to the 24 on-the-hour points in time from 00:00:00 to 23:00:00. For example, 1 indicates 01:00:00. Format description:
     *
     *   Set this parameter to a JSON-formatted array. For example, a value of ["1"] specifies automatic snapshots to be created at 01:00:00.
     *   To schedule multiple automatic snapshots to be created in a day, you can specify multiple values. Separate the values with commas (,). You can specify up to 24 points in time. For example, a value of ["1","3","5"] specifies automatic snapshots to be created at 01:00:00, 03:00:00, and 05:00:00.
     *
     * >  If an automatic snapshot is being created when the time scheduled for creating another automatic snapshot is due, the new snapshot task is skipped. This may occur when a disk contains a large volume of data. For example, you scheduled snapshots to be automatically created at 09:00, 10:00, 11:00, and 12:00. The system starts to create a snapshot for the disk at 09:00:00. The process takes 80 minutes to complete because the disk contains a large volume of data and ends at 10:20:00. The system skips the automatic snapshot task scheduled for 10:00:00 and creates the next automatic snapshot for the disk at 11:00:00.
     *
     * This parameter is required.
     *
     * @example ["0", "1", … "23"]
     *
     * @var string
     */
    public $timePoints;
    protected $_name = [
        'copiedSnapshotsRetentionDays' => 'CopiedSnapshotsRetentionDays',
        'copyEncryptionConfiguration' => 'CopyEncryptionConfiguration',
        'enableCrossRegionCopy' => 'EnableCrossRegionCopy',
        'ownerId' => 'OwnerId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'storageLocationArn' => 'StorageLocationArn',
        'tag' => 'Tag',
        'targetCopyRegions' => 'TargetCopyRegions',
        'autoSnapshotPolicyName' => 'autoSnapshotPolicyName',
        'regionId' => 'regionId',
        'repeatWeekdays' => 'repeatWeekdays',
        'retentionDays' => 'retentionDays',
        'timePoints' => 'timePoints',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->copiedSnapshotsRetentionDays) {
            $res['CopiedSnapshotsRetentionDays'] = $this->copiedSnapshotsRetentionDays;
        }
        if (null !== $this->copyEncryptionConfiguration) {
            $res['CopyEncryptionConfiguration'] = null !== $this->copyEncryptionConfiguration ? $this->copyEncryptionConfiguration->toMap() : null;
        }
        if (null !== $this->enableCrossRegionCopy) {
            $res['EnableCrossRegionCopy'] = $this->enableCrossRegionCopy;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->storageLocationArn) {
            $res['StorageLocationArn'] = $this->storageLocationArn;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetCopyRegions) {
            $res['TargetCopyRegions'] = $this->targetCopyRegions;
        }
        if (null !== $this->autoSnapshotPolicyName) {
            $res['autoSnapshotPolicyName'] = $this->autoSnapshotPolicyName;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->repeatWeekdays) {
            $res['repeatWeekdays'] = $this->repeatWeekdays;
        }
        if (null !== $this->retentionDays) {
            $res['retentionDays'] = $this->retentionDays;
        }
        if (null !== $this->timePoints) {
            $res['timePoints'] = $this->timePoints;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CopiedSnapshotsRetentionDays'])) {
            $model->copiedSnapshotsRetentionDays = $map['CopiedSnapshotsRetentionDays'];
        }
        if (isset($map['CopyEncryptionConfiguration'])) {
            $model->copyEncryptionConfiguration = copyEncryptionConfiguration::fromMap($map['CopyEncryptionConfiguration']);
        }
        if (isset($map['EnableCrossRegionCopy'])) {
            $model->enableCrossRegionCopy = $map['EnableCrossRegionCopy'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StorageLocationArn'])) {
            $model->storageLocationArn = $map['StorageLocationArn'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetCopyRegions'])) {
            $model->targetCopyRegions = $map['TargetCopyRegions'];
        }
        if (isset($map['autoSnapshotPolicyName'])) {
            $model->autoSnapshotPolicyName = $map['autoSnapshotPolicyName'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['repeatWeekdays'])) {
            $model->repeatWeekdays = $map['repeatWeekdays'];
        }
        if (isset($map['retentionDays'])) {
            $model->retentionDays = $map['retentionDays'];
        }
        if (isset($map['timePoints'])) {
            $model->timePoints = $map['timePoints'];
        }

        return $model;
    }
}
