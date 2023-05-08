<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class LaunchSurveyRequest extends Model
{
    /**
     * @example 4685b65a-eb8f-11ec-8ea0-0242ac120002
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $contactFlowVariables;

    /**
     * @example device
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example job-6580466654649****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 4685b65a-eb8f-11ec-8ea0-0242ac120002
     *
     * @var string
     */
    public $smsMetadataId;

    /**
     * @example IVR
     *
     * @var string
     */
    public $surveyChannel;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'contactFlowId'        => 'ContactFlowId',
        'contactFlowVariables' => 'ContactFlowVariables',
        'deviceId'             => 'DeviceId',
        'instanceId'           => 'InstanceId',
        'jobId'                => 'JobId',
        'smsMetadataId'        => 'SmsMetadataId',
        'surveyChannel'        => 'SurveyChannel',
        'userId'               => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->contactFlowVariables) {
            $res['ContactFlowVariables'] = $this->contactFlowVariables;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->smsMetadataId) {
            $res['SmsMetadataId'] = $this->smsMetadataId;
        }
        if (null !== $this->surveyChannel) {
            $res['SurveyChannel'] = $this->surveyChannel;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LaunchSurveyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['ContactFlowVariables'])) {
            $model->contactFlowVariables = $map['ContactFlowVariables'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['SmsMetadataId'])) {
            $model->smsMetadataId = $map['SmsMetadataId'];
        }
        if (isset($map['SurveyChannel'])) {
            $model->surveyChannel = $map['SurveyChannel'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
