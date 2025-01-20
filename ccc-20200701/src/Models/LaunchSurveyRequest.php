<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class LaunchSurveyRequest extends Model
{
    /**
     * @var string
     */
    public $contactFlowId;
    /**
     * @var string
     */
    public $contactFlowVariables;
    /**
     * @var string
     */
    public $deviceId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $smsMetadataId;
    /**
     * @var string
     */
    public $surveyChannel;
    /**
     * @var string
     */
    public $surveyTemplateId;
    /**
     * @var string
     */
    public $surveyTemplateVariables;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'contactFlowId'           => 'ContactFlowId',
        'contactFlowVariables'    => 'ContactFlowVariables',
        'deviceId'                => 'DeviceId',
        'instanceId'              => 'InstanceId',
        'jobId'                   => 'JobId',
        'smsMetadataId'           => 'SmsMetadataId',
        'surveyChannel'           => 'SurveyChannel',
        'surveyTemplateId'        => 'SurveyTemplateId',
        'surveyTemplateVariables' => 'SurveyTemplateVariables',
        'userId'                  => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->surveyTemplateId) {
            $res['SurveyTemplateId'] = $this->surveyTemplateId;
        }

        if (null !== $this->surveyTemplateVariables) {
            $res['SurveyTemplateVariables'] = $this->surveyTemplateVariables;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['SurveyTemplateId'])) {
            $model->surveyTemplateId = $map['SurveyTemplateId'];
        }

        if (isset($map['SurveyTemplateVariables'])) {
            $model->surveyTemplateVariables = $map['SurveyTemplateVariables'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
