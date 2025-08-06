<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody\autoSnapshotPolicies;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody\autoSnapshotPolicies\autoSnapshotPolicy\copyEncryptionConfiguration;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody\autoSnapshotPolicies\autoSnapshotPolicy\tags;

class autoSnapshotPolicy extends Model
{
    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @var int
     */
    public $copiedSnapshotsRetentionDays;

    /**
     * @var copyEncryptionConfiguration
     */
    public $copyEncryptionConfiguration;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $diskNums;

    /**
     * @var bool
     */
    public $enableCrossRegionCopy;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $repeatWeekdays;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $retentionDays;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $targetCopyRegions;

    /**
     * @var string
     */
    public $timePoints;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $volumeNums;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'autoSnapshotPolicyName' => 'AutoSnapshotPolicyName',
        'copiedSnapshotsRetentionDays' => 'CopiedSnapshotsRetentionDays',
        'copyEncryptionConfiguration' => 'CopyEncryptionConfiguration',
        'creationTime' => 'CreationTime',
        'diskNums' => 'DiskNums',
        'enableCrossRegionCopy' => 'EnableCrossRegionCopy',
        'regionId' => 'RegionId',
        'repeatWeekdays' => 'RepeatWeekdays',
        'resourceGroupId' => 'ResourceGroupId',
        'retentionDays' => 'RetentionDays',
        'status' => 'Status',
        'tags' => 'Tags',
        'targetCopyRegions' => 'TargetCopyRegions',
        'timePoints' => 'TimePoints',
        'type' => 'Type',
        'volumeNums' => 'VolumeNums',
    ];

    public function validate()
    {
        if (null !== $this->copyEncryptionConfiguration) {
            $this->copyEncryptionConfiguration->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }

        if (null !== $this->autoSnapshotPolicyName) {
            $res['AutoSnapshotPolicyName'] = $this->autoSnapshotPolicyName;
        }

        if (null !== $this->copiedSnapshotsRetentionDays) {
            $res['CopiedSnapshotsRetentionDays'] = $this->copiedSnapshotsRetentionDays;
        }

        if (null !== $this->copyEncryptionConfiguration) {
            $res['CopyEncryptionConfiguration'] = null !== $this->copyEncryptionConfiguration ? $this->copyEncryptionConfiguration->toArray($noStream) : $this->copyEncryptionConfiguration;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->diskNums) {
            $res['DiskNums'] = $this->diskNums;
        }

        if (null !== $this->enableCrossRegionCopy) {
            $res['EnableCrossRegionCopy'] = $this->enableCrossRegionCopy;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->repeatWeekdays) {
            $res['RepeatWeekdays'] = $this->repeatWeekdays;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->targetCopyRegions) {
            $res['TargetCopyRegions'] = $this->targetCopyRegions;
        }

        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->volumeNums) {
            $res['VolumeNums'] = $this->volumeNums;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }

        if (isset($map['AutoSnapshotPolicyName'])) {
            $model->autoSnapshotPolicyName = $map['AutoSnapshotPolicyName'];
        }

        if (isset($map['CopiedSnapshotsRetentionDays'])) {
            $model->copiedSnapshotsRetentionDays = $map['CopiedSnapshotsRetentionDays'];
        }

        if (isset($map['CopyEncryptionConfiguration'])) {
            $model->copyEncryptionConfiguration = copyEncryptionConfiguration::fromMap($map['CopyEncryptionConfiguration']);
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DiskNums'])) {
            $model->diskNums = $map['DiskNums'];
        }

        if (isset($map['EnableCrossRegionCopy'])) {
            $model->enableCrossRegionCopy = $map['EnableCrossRegionCopy'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RepeatWeekdays'])) {
            $model->repeatWeekdays = $map['RepeatWeekdays'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['TargetCopyRegions'])) {
            $model->targetCopyRegions = $map['TargetCopyRegions'];
        }

        if (isset($map['TimePoints'])) {
            $model->timePoints = $map['TimePoints'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VolumeNums'])) {
            $model->volumeNums = $map['VolumeNums'];
        }

        return $model;
    }
}
