<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class CreateAutoSnapshotPolicyShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example policyTest
     *
     * @var string
     */
    public $policyName;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $repeatWeekdaysShrink;

    /**
     * @description This parameter is required.
     *
     * @example 30
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $timePointsShrink;
    protected $_name = [
        'policyName'           => 'PolicyName',
        'regionId'             => 'RegionId',
        'repeatWeekdaysShrink' => 'RepeatWeekdays',
        'retentionDays'        => 'RetentionDays',
        'timePointsShrink'     => 'TimePoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repeatWeekdaysShrink) {
            $res['RepeatWeekdays'] = $this->repeatWeekdaysShrink;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->timePointsShrink) {
            $res['TimePoints'] = $this->timePointsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAutoSnapshotPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepeatWeekdays'])) {
            $model->repeatWeekdaysShrink = $map['RepeatWeekdays'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['TimePoints'])) {
            $model->timePointsShrink = $map['TimePoints'];
        }

        return $model;
    }
}
