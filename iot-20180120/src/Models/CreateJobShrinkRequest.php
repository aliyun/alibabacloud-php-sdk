<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateJobShrinkRequest extends Model
{
    /**
     * @example jobDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example { "serviceIdentifier": "test_service", "params": { "key1": "value1", "key2": "value2" } }
     *
     * @var string
     */
    public $jobDocument;

    /**
     * @example {   "fileKey":"5cc34***f9/tazJ***s",   "signMethod":"Sha256",   "sign":"***" }
     *
     * @var string
     */
    public $jobFileShrink;

    /**
     * @example oneJob
     *
     * @var string
     */
    public $jobName;

    /**
     * @example {"maximumPerMinute": 1000}
     *
     * @var string
     */
    public $rolloutConfigShrink;

    /**
     * @example 1557062301656
     *
     * @var int
     */
    public $scheduledTime;

    /**
     * @example {"targetType":"PRODUCT_KEY","targetProduct":"a1j***3d"}
     *
     * @var string
     */
    public $targetConfigShrink;

    /**
     * @example {"inProgressTimeoutInMinutes": 60}
     *
     * @var string
     */
    public $timeoutConfigShrink;

    /**
     * @example INVOKE_SERVICE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description'         => 'Description',
        'iotInstanceId'       => 'IotInstanceId',
        'jobDocument'         => 'JobDocument',
        'jobFileShrink'       => 'JobFile',
        'jobName'             => 'JobName',
        'rolloutConfigShrink' => 'RolloutConfig',
        'scheduledTime'       => 'ScheduledTime',
        'targetConfigShrink'  => 'TargetConfig',
        'timeoutConfigShrink' => 'TimeoutConfig',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->jobDocument) {
            $res['JobDocument'] = $this->jobDocument;
        }
        if (null !== $this->jobFileShrink) {
            $res['JobFile'] = $this->jobFileShrink;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->rolloutConfigShrink) {
            $res['RolloutConfig'] = $this->rolloutConfigShrink;
        }
        if (null !== $this->scheduledTime) {
            $res['ScheduledTime'] = $this->scheduledTime;
        }
        if (null !== $this->targetConfigShrink) {
            $res['TargetConfig'] = $this->targetConfigShrink;
        }
        if (null !== $this->timeoutConfigShrink) {
            $res['TimeoutConfig'] = $this->timeoutConfigShrink;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JobDocument'])) {
            $model->jobDocument = $map['JobDocument'];
        }
        if (isset($map['JobFile'])) {
            $model->jobFileShrink = $map['JobFile'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['RolloutConfig'])) {
            $model->rolloutConfigShrink = $map['RolloutConfig'];
        }
        if (isset($map['ScheduledTime'])) {
            $model->scheduledTime = $map['ScheduledTime'];
        }
        if (isset($map['TargetConfig'])) {
            $model->targetConfigShrink = $map['TargetConfig'];
        }
        if (isset($map['TimeoutConfig'])) {
            $model->timeoutConfigShrink = $map['TimeoutConfig'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
