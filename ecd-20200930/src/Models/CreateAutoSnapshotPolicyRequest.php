<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateAutoSnapshotPolicyRequest extends Model
{
    /**
     * @description The CRON expression for periodic scheduling.
     *
     * @example 0 0 2 ? * 1-7
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description The name of the automatic snapshot policy.
     *
     * @example test_auto_policy
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The ID of the region where the automatic snapshot policy is created. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The retention period of automatic snapshots. Unit: days. Valid values:
     *
     *   \-1: Automatic snapshots are retained until they are deleted.
     *   1 to 65536: Automatic snapshots are retained for the specified number of days.
     *
     * @example 30
     *
     * @var int
     */
    public $retentionDays;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'policyName'     => 'PolicyName',
        'regionId'       => 'RegionId',
        'retentionDays'  => 'RetentionDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
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
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
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

        return $model;
    }
}
