<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateCallTaskRequest extends Model
{
    /**
     * @description The type of the task template. Valid values:
     *
     *   **VMS_VOICE_TTS**: the text-to-speech (TTS) notification template.
     *   **VMS_VOICE_CODE**: the voice notification template.
     *   **VMS_TTS**: the voice verification code template.
     *
     * @example VMS_VOICE_TTS
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The called numbers.
     *
     *   If you set DataType to LIST, the value of Data is in the LIST format.
     *   If you set DataType to JSON, the value of Data is in the JSON format.
     *
     * @example { "paramNames":["name1","name2","key3"], "calleeList":[ { "callee":"131222222", "params":["zangsan","zhangsan01","zhangsan02"] }, { "callee":"131222222", "params":["zangsan","zhangsan01","zhangsan02"] }, ] }
     *
     * @var string
     */
    public $data;

    /**
     * @description The type of called numbers. Valid values:
     *
     *   **LIST**: the called numbers that are separated by commas (,).
     *   **JSON**: a JSON-formatted list of called numbers with template parameters.
     *
     * @example JSON
     *
     * @var string
     */
    public $dataType;

    /**
     * @description This parameter is unavailable.
     *
     * @example 1
     *
     * @var string
     */
    public $fireTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The calling number. Only virtual numbers are supported.
     *
     * @example 05516214****
     *
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of the calling number. Set the value to **LIST**.
     *
     * @example LIST
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description This parameter is unavailable.
     *
     * @example 1
     *
     * @var string
     */
    public $scheduleType;

    /**
     * @description This parameter is unavailable.
     *
     * @example 1
     *
     * @var string
     */
    public $stopTime;

    /**
     * @description The task name.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The template ID.
     *
     * @example TTS_2122****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The template name.
     *
     * @example Test Template
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'bizType'              => 'BizType',
        'data'                 => 'Data',
        'dataType'             => 'DataType',
        'fireTime'             => 'FireTime',
        'ownerId'              => 'OwnerId',
        'resource'             => 'Resource',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceType'         => 'ResourceType',
        'scheduleType'         => 'ScheduleType',
        'stopTime'             => 'StopTime',
        'taskName'             => 'TaskName',
        'templateCode'         => 'TemplateCode',
        'templateName'         => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->fireTime) {
            $res['FireTime'] = $this->fireTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCallTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['FireTime'])) {
            $model->fireTime = $map['FireTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
