<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class SaveRecordingRequest extends Model
{
    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $voiceSliceRecordingList;
    protected $_name = [
        'conversationId'          => 'ConversationId',
        'duration'                => 'Duration',
        'fileName'                => 'FileName',
        'filePath'                => 'FilePath',
        'instanceId'              => 'InstanceId',
        'instanceOwnerId'         => 'InstanceOwnerId',
        'startTime'               => 'StartTime',
        'type'                    => 'Type',
        'voiceSliceRecordingList' => 'VoiceSliceRecordingList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->voiceSliceRecordingList) {
            $res['VoiceSliceRecordingList'] = $this->voiceSliceRecordingList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VoiceSliceRecordingList'])) {
            $model->voiceSliceRecordingList = $map['VoiceSliceRecordingList'];
        }

        return $model;
    }
}
