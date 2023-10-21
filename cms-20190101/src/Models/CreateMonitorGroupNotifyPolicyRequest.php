<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitorGroupNotifyPolicyRequest extends Model
{
    /**
     * @description The timestamp that indicates the end time of the validity period for the policy.
     *
     * This value is a UNIX timestamp that represents the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     * @example 1623208500000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the application group.
     *
     * @example 7301****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The type of the policy. Valid value: PauseNotify.
     *
     * @example PauseNotify
     *
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The timestamp that indicates the start time of the validity period for the policy.
     *
     * This value is a UNIX timestamp that represents the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     * @example 1622949300000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'    => 'EndTime',
        'groupId'    => 'GroupId',
        'policyType' => 'PolicyType',
        'regionId'   => 'RegionId',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitorGroupNotifyPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
