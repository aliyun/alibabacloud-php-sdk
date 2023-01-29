<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\GetAutoSnapshotPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $appliedDbfsNumber;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $lastModified;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
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
    public $statusDetail;

    /**
     * @var string[]
     */
    public $timePoints;
    protected $_name = [
        'accountId'         => 'AccountId',
        'appliedDbfsNumber' => 'AppliedDbfsNumber',
        'createdTime'       => 'CreatedTime',
        'lastModified'      => 'LastModified',
        'policyId'          => 'PolicyId',
        'policyName'        => 'PolicyName',
        'regionId'          => 'RegionId',
        'repeatWeekdays'    => 'RepeatWeekdays',
        'retentionDays'     => 'RetentionDays',
        'status'            => 'Status',
        'statusDetail'      => 'StatusDetail',
        'timePoints'        => 'TimePoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->appliedDbfsNumber) {
            $res['AppliedDbfsNumber'] = $this->appliedDbfsNumber;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->lastModified) {
            $res['LastModified'] = $this->lastModified;
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
        if (null !== $this->repeatWeekdays) {
            $res['RepeatWeekdays'] = $this->repeatWeekdays;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDetail) {
            $res['StatusDetail'] = $this->statusDetail;
        }
        if (null !== $this->timePoints) {
            $res['TimePoints'] = $this->timePoints;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AppliedDbfsNumber'])) {
            $model->appliedDbfsNumber = $map['AppliedDbfsNumber'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['LastModified'])) {
            $model->lastModified = $map['LastModified'];
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
        if (isset($map['RepeatWeekdays'])) {
            if (!empty($map['RepeatWeekdays'])) {
                $model->repeatWeekdays = $map['RepeatWeekdays'];
            }
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDetail'])) {
            $model->statusDetail = $map['StatusDetail'];
        }
        if (isset($map['TimePoints'])) {
            if (!empty($map['TimePoints'])) {
                $model->timePoints = $map['TimePoints'];
            }
        }

        return $model;
    }
}
