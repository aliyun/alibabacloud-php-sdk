<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class AssignJobsAsyncShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $callingNumberShrink;

    /**
     * @description This parameter is required.
     *
     * @example 12f3dd08-0c55-44ce-9b64-e69d35ed3a76
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example d004cfd2-6a81-491c-83c6-cbe186620c95
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobsJsonShrink;

    /**
     * @example {"maxAttemptsPerDay":"3","minAttemptInterval":"10","routingStrategy":"LocalProvinceFirst","repeatDays":["1","2","3"],"workingTime":[{"beginTime":"10:00:00","endTime":"11:00:00"},{"beginTime":"14:00:00","endTime":"15:00:00"}],"repeatable":true,"endTime":1707494400000,"startTime":1706976000000,"repeatBy":"Week"}
     *
     * @var string
     */
    public $strategyJson;
    protected $_name = [
        'callingNumberShrink' => 'CallingNumber',
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
        'jobsJsonShrink' => 'JobsJson',
        'strategyJson' => 'StrategyJson',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callingNumberShrink) {
            $res['CallingNumber'] = $this->callingNumberShrink;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobsJsonShrink) {
            $res['JobsJson'] = $this->jobsJsonShrink;
        }
        if (null !== $this->strategyJson) {
            $res['StrategyJson'] = $this->strategyJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignJobsAsyncShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallingNumber'])) {
            $model->callingNumberShrink = $map['CallingNumber'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobsJson'])) {
            $model->jobsJsonShrink = $map['JobsJson'];
        }
        if (isset($map['StrategyJson'])) {
            $model->strategyJson = $map['StrategyJson'];
        }

        return $model;
    }
}
