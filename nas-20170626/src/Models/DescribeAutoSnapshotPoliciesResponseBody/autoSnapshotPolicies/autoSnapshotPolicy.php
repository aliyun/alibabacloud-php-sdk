<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesResponseBody\autoSnapshotPolicies;

use AlibabaCloud\Tea\Model;

class autoSnapshotPolicy extends Model
{
    /**
     * @description The ID of the automatic snapshot policy.
     *
     * @example sp-extreme-233e6****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description The name of the automatic snapshot policy.
     *
     * @example FinanceJoshua
     *
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @description The time when the automatic snapshot policy was created.
     *
     * The time follows the [ISO8601](https://www.iso.org/iso-8601-date-and-time-format.html) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     * @example 2014-04-21T12:08:52Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The number of file systems to which the automatic snapshot policy applies.
     *
     * @example 2
     *
     * @var int
     */
    public $fileSystemNums;

    /**
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The region ID of the automatic snapshot policy.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The days of a week on which auto snapshots are created.
     *
     * Valid values: 1 to 7. The values from 1 to 7 indicate 7 days in a week from Monday to Sunday.
     * @example 1,5
     *
     * @var string
     */
    public $repeatWeekdays;

    /**
     * @description The retention period of auto snapshots.
     *
     * Valid values:
     *
     *   \\-1: Auto snapshots are permanently retained. After the number of auto snapshots exceeds the upper limit, the earliest auto snapshot is automatically deleted.
     *   1 to 65536: Auto snapshots are retained for the specified days. After the retention period of auto snapshots expires, the auto snapshots are automatically deleted.
     *
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The status of the automatic snapshot policy.
     *
     * Valid values:
     *
     *   Creating: The automatic snapshot policy is being created.
     *   Available: The automatic snapshot policy is available.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The points in time at which auto snapshots are created.
     *
     * Valid values: `0 to 23`. The values from 0 to 23 indicate a total of 24 hours from `00:00 to 23:00`. For example, 1 indicates 01:00. A maximum of 24 points in time can be returned. Multiple points in time are separated with commas (,).
     * @example 4,19
     *
     * @var string
     */
    public $timePoints;
    protected $_name = [
        'autoSnapshotPolicyId'   => 'AutoSnapshotPolicyId',
        'autoSnapshotPolicyName' => 'AutoSnapshotPolicyName',
        'createTime'             => 'CreateTime',
        'fileSystemNums'         => 'FileSystemNums',
        'fileSystemType'         => 'FileSystemType',
        'regionId'               => 'RegionId',
        'repeatWeekdays'         => 'RepeatWeekdays',
        'retentionDays'          => 'RetentionDays',
        'status'                 => 'Status',
        'timePoints'             => 'TimePoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->autoSnapshotPolicyName) {
            $res['AutoSnapshotPolicyName'] = $this->autoSnapshotPolicyName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fileSystemNums) {
            $res['FileSystemNums'] = $this->fileSystemNums;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repeatWeekdays) {
            $res['RepeatWeekdays'] = $this->repeatWeekdays;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoSnapshotPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['AutoSnapshotPolicyName'])) {
            $model->autoSnapshotPolicyName = $map['AutoSnapshotPolicyName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FileSystemNums'])) {
            $model->fileSystemNums = $map['FileSystemNums'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepeatWeekdays'])) {
            $model->repeatWeekdays = $map['RepeatWeekdays'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimePoints'])) {
            $model->timePoints = $map['TimePoints'];
        }

        return $model;
    }
}
