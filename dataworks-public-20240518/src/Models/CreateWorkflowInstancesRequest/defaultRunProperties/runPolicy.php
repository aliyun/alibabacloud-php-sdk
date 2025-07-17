<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateWorkflowInstancesRequest\defaultRunProperties;

use AlibabaCloud\Tea\Model;

class runPolicy extends Model
{
    /**
     * @description The end time of running. Configure this parameter in the `hh:mm:ss` format. The time must be in the 24-hour clock. This parameter is required if you configure the RunPolicy parameter.
     *
     * @example 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies whether the instances can be run immediately during the time period in the future. Valid values: true and false.
     *
     * @example false
     *
     * @var bool
     */
    public $immediately;

    /**
     * @description The start time of running. Configure this parameter in the `hh:mm:ss` format. The time must be in the 24-hour clock. This parameter is required if you configure the RunPolicy parameter.
     *
     * @example 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of the time period during which the data is backfilled. This parameter is required if you configure the RunPolicy parameter.
     *
     *   Daily
     *   Weekend
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
