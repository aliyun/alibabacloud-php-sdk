<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesResponseBody\autoSnapshotPolicies;

use AlibabaCloud\Tea\Model;

class autoSnapshotPolicy extends Model
{
    /**
     * @var string
     */
    public $timePoints;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $repeatWeekdays;

    /**
     * @var string
     */
    public $autoSnapshotPolicyName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @var int
     */
    public $retentionDays;

    /**
     * @var int
     */
    public $fileSystemNums;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'timePoints'             => 'TimePoints',
        'status'                 => 'Status',
        'repeatWeekdays'         => 'RepeatWeekdays',
        'autoSnapshotPolicyName' => 'AutoSnapshotPolicyName',
        'createTime'             => 'CreateTime',
        'autoSnapshotPolicyId'   => 'AutoSnapshotPolicyId',
        'retentionDays'          => 'RetentionDays',
        'fileSystemNums'         => 'FileSystemNums',
        'regionId'               => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->repeatWeekdays) {
            $res['RepeatWeekdays'] = $this->repeatWeekdays;
        }
        if (null !== $this->autoSnapshotPolicyName) {
            $res['AutoSnapshotPolicyName'] = $this->autoSnapshotPolicyName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->fileSystemNums) {
            $res['FileSystemNums'] = $this->fileSystemNums;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['TimePoints'])) {
            $model->timePoints = $map['TimePoints'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RepeatWeekdays'])) {
            $model->repeatWeekdays = $map['RepeatWeekdays'];
        }
        if (isset($map['AutoSnapshotPolicyName'])) {
            $model->autoSnapshotPolicyName = $map['AutoSnapshotPolicyName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['FileSystemNums'])) {
            $model->fileSystemNums = $map['FileSystemNums'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
