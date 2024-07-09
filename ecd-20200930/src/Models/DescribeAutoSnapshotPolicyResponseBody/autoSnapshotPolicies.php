<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeAutoSnapshotPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class autoSnapshotPolicies extends Model
{
    /**
     * @description The time when the automatic snapshot policy was created. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the `yyyy-mm-ddthh:mm:ssz` format. The time is displayed in UTC.
     *
     * @example 2023-01-11T09:14:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The cron expression that specifies when Elastic Desktop Service creates snapshots on the cloud computers.
     *
     * @example 0 0 5,7 ? * 2/2
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description The number of cloud computers to which the automatic snapshot policy is applied.
     *
     * @example 5
     *
     * @var int
     */
    public $desktopNum;

    /**
     * @description The ID of the automatic snapshot policy.
     *
     * @example sp-3e3bmfcdkjfl1****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The name of the automatic snapshot policy.
     *
     * @example snapshot01
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The ID of the region to which the automatic snapshot policy belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The retention period of the automatic snapshots. Unit: days. Valid values: 1 to 180.
     *
     * @example 3
     *
     * @var string
     */
    public $retentionDays;

    /**
     * @description The status of the automatic snapshot policy.
     *
     * Valid values:
     *
     *   Expire: The automatic snapshot policy cannot be used because you have overdue payments in your account.
     *
     * <!-- -->
     *
     *   Normal: The automatic snapshot policy is normal.
     *
     * <!-- -->
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The points in time at which the auto snapshots were created.
     *
     * The parameter values are a JSON array. Example: `["0", "1", ... "23"]`. A maximum of 24 points in time are returned. The points in time are separated with commas (,).
     * @example ["17","18"]
     *
     * @var string
     */
    public $timePoints;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'cronExpression' => 'CronExpression',
        'desktopNum'     => 'DesktopNum',
        'policyId'       => 'PolicyId',
        'policyName'     => 'PolicyName',
        'regionId'       => 'RegionId',
        'retentionDays'  => 'RetentionDays',
        'status'         => 'Status',
        'timePoints'     => 'TimePoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->desktopNum) {
            $res['DesktopNum'] = $this->desktopNum;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return autoSnapshotPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['DesktopNum'])) {
            $model->desktopNum = $map['DesktopNum'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
