<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateAutoSnapshotPolicyRequest extends Model
{
    /**
     * @description The name of the automatic snapshot policy.
     *
     * Limits:
     *
     *   The name must be 2 to 128 characters in length.
     *   The name must start with a letter.
     *   The name can contain digits, colons (:), underscores (_), and hyphens (-). It cannot start with `http://` or `https://`.
     *   This parameter is empty by default.
     *
     * @example FinanceJoshua
     *
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @description The type of the file system.
     *
     * This parameter is required.
     * @example extreme
     *
     * @var string
     */
    public $fileSystemType;

    /**
     * @description The days of a week on which to create automatic snapshots.
     *
     * This parameter is required.
     * @example 1,2,3
     *
     * @var string
     */
    public $repeatWeekdays;

    /**
     * @description The retention period of auto snapshots.
     *
     * Valid values:
     *
     *   \\-1 (default). Auto snapshots are permanently retained. After the number of auto snapshots exceeds the upper limit, the earliest auto snapshot is automatically deleted.
     *   1 to 65536: Auto snapshots are retained for the specified days. After the retention period of auto snapshots expires, the auto snapshots are automatically deleted.
     *
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The points in time at which auto snapshots were created.
     *
     * This parameter is required.
     * @example 0,1,…23
     *
     * @var string
     */
    public $timePoints;
    protected $_name = [
        'autoSnapshotPolicyName' => 'AutoSnapshotPolicyName',
        'fileSystemType'         => 'FileSystemType',
        'repeatWeekdays'         => 'RepeatWeekdays',
        'retentionDays'          => 'RetentionDays',
        'timePoints'             => 'TimePoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyName) {
            $res['AutoSnapshotPolicyName'] = $this->autoSnapshotPolicyName;
        }
        if (null !== $this->fileSystemType) {
            $res['FileSystemType'] = $this->fileSystemType;
        }
        if (null !== $this->repeatWeekdays) {
            $res['RepeatWeekdays'] = $this->repeatWeekdays;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
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
        if (isset($map['AutoSnapshotPolicyName'])) {
            $model->autoSnapshotPolicyName = $map['AutoSnapshotPolicyName'];
        }
        if (isset($map['FileSystemType'])) {
            $model->fileSystemType = $map['FileSystemType'];
        }
        if (isset($map['RepeatWeekdays'])) {
            $model->repeatWeekdays = $map['RepeatWeekdays'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['TimePoints'])) {
            $model->timePoints = $map['TimePoints'];
        }

        return $model;
    }
}
