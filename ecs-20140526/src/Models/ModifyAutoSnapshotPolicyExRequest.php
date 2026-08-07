<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoSnapshotPolicyExRequest\copyEncryptionConfiguration;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyAutoSnapshotPolicyExRequest\targetTags;

class ModifyAutoSnapshotPolicyExRequest extends Model
{
    /**
     * @var int
     */
    public $copiedSnapshotsRetentionDays;

    /**
     * @var copyEncryptionConfiguration
     */
    public $copyEncryptionConfiguration;

    /**
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
     * @var string
     */
    public $targetCopyRegions;

    /**
     * @var targetTags[]
     */
    public $targetTags;

    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $repeatWeekdays;

    /**
     * @var int
     */
    public $retentionDays;

    /**
     * @var string
     */
    public $timePoints;
    protected $_name = [
        'copiedSnapshotsRetentionDays' => 'CopiedSnapshotsRetentionDays',
        'copyEncryptionConfiguration' => 'CopyEncryptionConfiguration',
        'enableCrossRegionCopy' => 'EnableCrossRegionCopy',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'targetCopyRegions' => 'TargetCopyRegions',
        'targetTags' => 'TargetTags',
        'autoSnapshotPolicyId' => 'autoSnapshotPolicyId',
        'autoSnapshotPolicyName' => 'autoSnapshotPolicyName',
        'regionId' => 'regionId',
        'repeatWeekdays' => 'repeatWeekdays',
        'retentionDays' => 'retentionDays',
        'timePoints' => 'timePoints',
    ];

    public function validate()
    {
        if (null !== $this->copyEncryptionConfiguration) {
            $this->copyEncryptionConfiguration->validate();
        }
        if (\is_array($this->targetTags)) {
            Model::validateArray($this->targetTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->copiedSnapshotsRetentionDays) {
            $res['CopiedSnapshotsRetentionDays'] = $this->copiedSnapshotsRetentionDays;
        }

        if (null !== $this->copyEncryptionConfiguration) {
            $res['CopyEncryptionConfiguration'] = null !== $this->copyEncryptionConfiguration ? $this->copyEncryptionConfiguration->toArray($noStream) : $this->copyEncryptionConfiguration;
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

        if (null !== $this->targetTags) {
            if (\is_array($this->targetTags)) {
                $res['TargetTags'] = [];
                $n1 = 0;
                foreach ($this->targetTags as $item1) {
                    $res['TargetTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TargetCopyRegions'])) {
            $model->targetCopyRegions = $map['TargetCopyRegions'];
        }

        if (isset($map['TargetTags'])) {
            if (!empty($map['TargetTags'])) {
                $model->targetTags = [];
                $n1 = 0;
                foreach ($map['TargetTags'] as $item1) {
                    $model->targetTags[$n1] = targetTags::fromMap($item1);
                    ++$n1;
                }
            }
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
