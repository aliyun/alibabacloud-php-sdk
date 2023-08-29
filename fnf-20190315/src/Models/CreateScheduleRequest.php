<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class CreateScheduleRequest extends Model
{
    /**
     * @example 0 * * * * *
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @example test description
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example flow
     *
     * @var string
     */
    public $flowName;

    /**
     * @example {"key": "value"}
     *
     * @var string
     */
    public $payload;

    /**
     * @example testRequestId
     *
     * @var string
     */
    public $requestId;

    /**
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
        'requestId'      => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleName) {
            $res['ScheduleName'] = $this->scheduleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScheduleRequest
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleName'])) {
            $model->scheduleName = $map['ScheduleName'];
        }

        return $model;
    }
}
