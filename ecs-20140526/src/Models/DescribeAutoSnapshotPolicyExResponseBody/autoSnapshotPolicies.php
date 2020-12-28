<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoSnapshotPolicyExResponseBody\autoSnapshotPolicies\tags;
use AlibabaCloud\Tea\Model;

class autoSnapshotPolicies extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $timePoints;

    /**
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @var string
     */
    public $targetCopyRegions;

    /**
     * @var int
     */
    public $copiedSnapshotsRetentionDays;

    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $retentionDays;

    /**
     * @var string
     */
    public $regionId;

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
    public $repeatWeekdays;

    /**
     * @var int
     */
    public $volumeNums;
    protected $_name = [
        'status'                       => 'Status',
        'creationTime'                 => 'CreationTime',
        'timePoints'                   => 'TimePoints',
        'autoSnapshotPolicyName'       => 'AutoSnapshotPolicyName',
        'targetCopyRegions'            => 'TargetCopyRegions',
        'copiedSnapshotsRetentionDays' => 'CopiedSnapshotsRetentionDays',
        'autoSnapshotPolicyId'         => 'AutoSnapshotPolicyId',
        'tags'                         => 'Tags',
        'retentionDays'                => 'RetentionDays',
        'regionId'                     => 'RegionId',
        'diskNums'                     => 'DiskNums',
        'enableCrossRegionCopy'        => 'EnableCrossRegionCopy',
        'repeatWeekdays'               => 'RepeatWeekdays',
        'volumeNums'                   => 'VolumeNums',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
        }
        if (null !== $this->autoSnapshotPolicyName) {
            $res['AutoSnapshotPolicyName'] = $this->autoSnapshotPolicyName;
        }
        if (null !== $this->targetCopyRegions) {
            $res['TargetCopyRegions'] = $this->targetCopyRegions;
        }
        if (null !== $this->copiedSnapshotsRetentionDays) {
            $res['CopiedSnapshotsRetentionDays'] = $this->copiedSnapshotsRetentionDays;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->diskNums) {
            $res['DiskNums'] = $this->diskNums;
        }
        if (null !== $this->enableCrossRegionCopy) {
            $res['EnableCrossRegionCopy'] = $this->enableCrossRegionCopy;
        }
        if (null !== $this->repeatWeekdays) {
            $res['RepeatWeekdays'] = $this->repeatWeekdays;
        }
        if (null !== $this->volumeNums) {
            $res['VolumeNums'] = $this->volumeNums;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoSnapshotPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['TimePoints'])) {
            $model->timePoints = $map['TimePoints'];
        }
        if (isset($map['AutoSnapshotPolicyName'])) {
            $model->autoSnapshotPolicyName = $map['AutoSnapshotPolicyName'];
        }
        if (isset($map['TargetCopyRegions'])) {
            $model->targetCopyRegions = $map['TargetCopyRegions'];
        }
        if (isset($map['CopiedSnapshotsRetentionDays'])) {
            $model->copiedSnapshotsRetentionDays = $map['CopiedSnapshotsRetentionDays'];
        }
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DiskNums'])) {
            $model->diskNums = $map['DiskNums'];
        }
        if (isset($map['EnableCrossRegionCopy'])) {
            $model->enableCrossRegionCopy = $map['EnableCrossRegionCopy'];
        }
        if (isset($map['RepeatWeekdays'])) {
            $model->repeatWeekdays = $map['RepeatWeekdays'];
        }
        if (isset($map['VolumeNums'])) {
            $model->volumeNums = $map['VolumeNums'];
        }

        return $model;
    }
}
