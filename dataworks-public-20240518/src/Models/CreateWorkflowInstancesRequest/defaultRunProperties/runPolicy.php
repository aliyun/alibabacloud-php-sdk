<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties;

use AlibabaCloud\Tea\Model;

class runPolicy extends Model
{
    /**
     * @description The end runtime. This field is required if the policy is set.
     *
     * @example 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The default value is false.
     *
     * @example false
     *
     * @var bool
     */
    public $immediately;

    /**
     * @description The start time. This field is required if the policy is set.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of the time period. This field is required if the policy is set.
     * - Daily: every day
     * - Weekend: Weekends only
     *
     * @example Daily
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endTime' => 'EndTime',
        'immediately' => 'Immediately',
        'startTime' => 'StartTime',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->immediately) {
            $res['Immediately'] = $this->immediately;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Immediately'])) {
            $model->immediately = $map['Immediately'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
