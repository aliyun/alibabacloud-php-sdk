<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAutoSnapshotPoliciesResponseBody\autoSnapshotPolicies;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $fileSystemNums;

    /**
     * @var string
     */
    public $fileSystemType;

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
    public $status;

    /**
     * @var string
     */
    public $timePoints;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'autoSnapshotPolicyName' => 'AutoSnapshotPolicyName',
        'createTime' => 'CreateTime',
        'fileSystemNums' => 'FileSystemNums',
        'fileSystemType' => 'FileSystemType',
        'regionId' => 'RegionId',
        'repeatWeekdays' => 'RepeatWeekdays',
        'retentionDays' => 'RetentionDays',
        'status' => 'Status',
        'timePoints' => 'TimePoints',
    ];

    public function validate()
    {
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
