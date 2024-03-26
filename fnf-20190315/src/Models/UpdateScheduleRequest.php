<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class UpdateScheduleRequest extends Model
{
    /**
     * @description The CRON expression.
     *
     * @example 0 * * * * *
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description The description of the time-based schedule.
     *
     * @example test description
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to enable the time-based schedule. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The name of the flow that is associated with the time-based schedule. The name must be unique within the region and cannot be modified after the time-based schedule is created. The name must meet the following conventions:
     *
     *   The name can contain letters, digits, underscores (\_), and hyphens (-).
     *   The name must start with a letter or an underscore (\_).
     *   The name is case-sensitive.
     *   The name must be 1 to 128 characters in length.
     *
     * @example testFlowName
     *
     * @var string
     */
    public $flowName;

    /**
     * @description The trigger message of the time-based schedule. It must be in the JSON format.
     *
     * @example {"key": "value"}
     *
     * @var string
     */
    public $payload;

    /**
     * @description The name of the time-based schedule. The name must meet the following conventions:
     *
     *   The name can contain letters, digits, underscores (\_), and hyphens (-).
     *   The name must start with a letter or an underscore (\_).
     *   The name is case-sensitive.
     *   The name must be 1 to 128 characters in length.
     *
     * @example testScheduleName
     *
     * @var string
     */
    public $scheduleName;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'description'    => 'Description',
        'enable'         => 'Enable',
        'flowName'       => 'FlowName',
        'payload'        => 'Payload',
        'scheduleName'   => 'ScheduleName',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->scheduleName) {
            $res['ScheduleName'] = $this->scheduleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['ScheduleName'])) {
            $model->scheduleName = $map['ScheduleName'];
        }

        return $model;
    }
}
