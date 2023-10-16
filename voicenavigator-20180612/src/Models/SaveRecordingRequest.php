<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class SaveRecordingRequest extends Model
{
    /**
     * @example 390515b5-6115-4ccf-83e2-52d5bfaf2ddf
     *
     * @var string
     */
    public $conversationId;

    /**
     * @example 10
     *
     * @var string
     */
    public $duration;

    /**
     * @example e6bef0db439d4048bfcf45322491becf.wav
     *
     * @var string
     */
    public $fileName;

    /**
     * @example oss://test/record/
     *
     * @var string
     */
    public $filePath;

    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1971226538081821
     *
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @example 1582267398628
     *
     * @var int
     */
    public $startTime;

    /**
     * @example Source
     *
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
