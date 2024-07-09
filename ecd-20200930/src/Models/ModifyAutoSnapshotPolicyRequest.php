<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyAutoSnapshotPolicyRequest extends Model
{
    /**
     * @description The CRON expression.
     *
     * @example 0 20 16 ? * 1,2,3,4,5,6,7
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description The ID of the automatic snapshot policy.
     *
     * This parameter is required.
     * @example sp-itcmrhqt01tdo****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The name of the automatic snapshot policy. The name must be 2 to 128 characters in length. The name must start with a letter but cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-). This parameter is empty by default.
     *
     * @example Automatic system snapshot
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The retention period of the automatic snapshots. Unit: days. Valid values: 1 to 180.
     *
     * @example 5
     *
     * @var int
     */
    public $retentionDays;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'policyId'       => 'PolicyId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAutoSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
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

        return $model;
    }
}
