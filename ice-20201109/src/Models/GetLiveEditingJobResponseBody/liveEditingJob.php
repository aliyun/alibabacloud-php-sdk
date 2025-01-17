<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob\liveStreamConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob\mediaProduceConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob\outputMediaConfig;

class liveEditingJob extends Model
{
    /**
     * @var string
     */
    public $clips;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $completeTime;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var liveStreamConfig
     */
    public $liveStreamConfig;
    /**
     * @var string
     */
    public $mediaId;
    /**
     * @var mediaProduceConfig
     */
    public $mediaProduceConfig;
    /**
     * @var string
     */
    public $mediaURL;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var outputMediaConfig
     */
    public $outputMediaConfig;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'clips'              => 'Clips',
        'code'               => 'Code',
        'completeTime'       => 'CompleteTime',
        'creationTime'       => 'CreationTime',
        'jobId'              => 'JobId',
        'liveStreamConfig'   => 'LiveStreamConfig',
        'mediaId'            => 'MediaId',
        'mediaProduceConfig' => 'MediaProduceConfig',
        'mediaURL'           => 'MediaURL',
        'message'            => 'Message',
        'modifiedTime'       => 'ModifiedTime',
        'outputMediaConfig'  => 'OutputMediaConfig',
        'projectId'          => 'ProjectId',
        'status'             => 'Status',
        'userData'           => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->liveStreamConfig) {
            $this->liveStreamConfig->validate();
        }
        if (null !== $this->mediaProduceConfig) {
            $this->mediaProduceConfig->validate();
        }
        if (null !== $this->outputMediaConfig) {
            $this->outputMediaConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clips) {
            $res['Clips'] = $this->clips;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->liveStreamConfig) {
            $res['LiveStreamConfig'] = null !== $this->liveStreamConfig ? $this->liveStreamConfig->toArray($noStream) : $this->liveStreamConfig;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->mediaProduceConfig) {
            $res['MediaProduceConfig'] = null !== $this->mediaProduceConfig ? $this->mediaProduceConfig->toArray($noStream) : $this->mediaProduceConfig;
        }

        if (null !== $this->mediaURL) {
            $res['MediaURL'] = $this->mediaURL;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->outputMediaConfig) {
            $res['OutputMediaConfig'] = null !== $this->outputMediaConfig ? $this->outputMediaConfig->toArray($noStream) : $this->outputMediaConfig;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['Clips'])) {
            $model->clips = $map['Clips'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['LiveStreamConfig'])) {
            $model->liveStreamConfig = liveStreamConfig::fromMap($map['LiveStreamConfig']);
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['MediaProduceConfig'])) {
            $model->mediaProduceConfig = mediaProduceConfig::fromMap($map['MediaProduceConfig']);
        }

        if (isset($map['MediaURL'])) {
            $model->mediaURL = $map['MediaURL'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['OutputMediaConfig'])) {
            $model->outputMediaConfig = outputMediaConfig::fromMap($map['OutputMediaConfig']);
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
