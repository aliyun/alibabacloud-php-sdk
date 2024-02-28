<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifyAutoSnapshotPolicyExShrinkRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 30
     *
     * @var int
     */
    public $copiedSnapshotsRetentionDays;

    /**
     * @var string
     */
    public $copyEncryptionConfigurationShrink;

    /**
     * @description The destination region to which to copy the snapshot. You can specify only a single destination region.
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
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The retention period of the snapshot copy in the destination region. Unit: days. Valid values:
     *
     *   \-1: The snapshot is permanently retained.
     *   1 to 65535: The automatic snapshot is retained for the specified number of days.
     *
     * Default value: -1.
     * @example ["cn-hangzhou"]
     *
     * @var string
     */
    public $targetCopyRegions;

    /**
     * @description The name of the automatic snapshot policy. If this parameter is not specified, the original name of the automatic snapshot policy is retained.
     *
     * @example sp-bp12m37ccmxvbmi5****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description The points in time of the day at which to create automatic snapshots. The time must be in UTC+8. Unit: hours. Valid values are 0 to 23, which correspond to the 24 points in time on the hour from 00:00:00 to 23:00:00. For example, a value of 1 indicates 01:00:00.
     *
     * To schedule multiple automatic snapshots to be created in a day, you can specify multiple hours.
     *
     *   You can specify up to 24 points in time.
     *   You must set this parameter to a JSON array such as `["0", "1", ... "23"]`. Separate the points in time with commas (,).
     *
     * @example SPTestName
     *
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @description The ID of the automatic snapshot policy. You can call the [DescribeAutoSnapshotPolicyEx](~~25530~~) operation to query available automatic snapshot policies.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The retention period of the automatic snapshot. Unit: days. Valid values:
     *
     *   \-1: The automatic snapshot is permanently retained.
     *   1 to 65536: The auto snapshot is retained for the specified number of days.
     *
     * Default value: -1.
     * @example ["1", "7"]
     *
     * @var string
     */
    public $repeatWeekdays;

    /**
     * @description Specifies whether to enable cross-region replication for the automatic snapshot.
     *
     *   true: enables cross-region replication for the automatic snapshot.
     *   false: disables cross-region replication for the automatic snapshot.
     *
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The days of the week on which to create automatic snapshots. Valid values are 1 to 7, which correspond to the days of the week. For example, a value of 1 indicates Monday.
     *
     * To schedule multiple automatic snapshots to be created in a week, you can specify multiple days.
     *
     *   You can specify up to seven days over a one-week period.
     *   You must set this parameter to a JSON array such as `["1", "2" ... "7"]`. Separate the values in the array with commas (,).
     *
     * @example ["0", "1"]
     *
     * @var string
     */
    public $timePoints;
    protected $_name = [
        'copiedSnapshotsRetentionDays'      => 'CopiedSnapshotsRetentionDays',
        'copyEncryptionConfigurationShrink' => 'CopyEncryptionConfiguration',
        'enableCrossRegionCopy'             => 'EnableCrossRegionCopy',
        'ownerId'                           => 'OwnerId',
        'resourceOwnerAccount'              => 'ResourceOwnerAccount',
        'resourceOwnerId'                   => 'ResourceOwnerId',
        'targetCopyRegions'                 => 'TargetCopyRegions',
        'autoSnapshotPolicyId'              => 'autoSnapshotPolicyId',
        'autoSnapshotPolicyName'            => 'autoSnapshotPolicyName',
        'regionId'                          => 'regionId',
        'repeatWeekdays'                    => 'repeatWeekdays',
        'retentionDays'                     => 'retentionDays',
        'timePoints'                        => 'timePoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->copiedSnapshotsRetentionDays) {
            $res['CopiedSnapshotsRetentionDays'] = $this->copiedSnapshotsRetentionDays;
        }
        if (null !== $this->copyEncryptionConfigurationShrink) {
            $res['CopyEncryptionConfiguration'] = $this->copyEncryptionConfigurationShrink;
        }
        if (null !== $this->enableCrossRegionCopy) {
            $res['EnableCrossRegionCopy'] = $this->enableCrossRegionCopy;
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
        if (null !== $this->targetCopyRegions) {
            $res['TargetCopyRegions'] = $this->targetCopyRegions;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['autoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
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
     * @return ModifyAutoSnapshotPolicyExShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CopiedSnapshotsRetentionDays'])) {
            $model->copiedSnapshotsRetentionDays = $map['CopiedSnapshotsRetentionDays'];
        }
        if (isset($map['CopyEncryptionConfiguration'])) {
            $model->copyEncryptionConfigurationShrink = $map['CopyEncryptionConfiguration'];
        }
        if (isset($map['EnableCrossRegionCopy'])) {
            $model->enableCrossRegionCopy = $map['EnableCrossRegionCopy'];
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
        if (isset($map['TargetCopyRegions'])) {
            $model->targetCopyRegions = $map['TargetCopyRegions'];
        }
        if (isset($map['autoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['autoSnapshotPolicyId'];
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
