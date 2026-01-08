<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetVideoCreationTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetVideoCreationTaskResultResponseBody\data\fileInfo;
use AlibabaCloud\SDK\DianJin\V20240628\Models\GetVideoCreationTaskResultResponseBody\data\mediaDetectionTaskResult;

class data extends Model
{
    /**
     * @var int
     */
    public $estimatedWaitTimeInSeconds;

    /**
     * @var fileInfo
     */
    public $fileInfo;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var mediaDetectionTaskResult
     */
    public $mediaDetectionTaskResult;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $statusReason;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'estimatedWaitTimeInSeconds' => 'estimatedWaitTimeInSeconds',
        'fileInfo' => 'fileInfo',
        'finishTime' => 'finishTime',
        'mediaDetectionTaskResult' => 'mediaDetectionTaskResult',
        'startTime' => 'startTime',
        'statusReason' => 'statusReason',
        'taskId' => 'taskId',
        'taskStatus' => 'taskStatus',
        'videoUrl' => 'videoUrl',
    ];

    public function validate()
    {
        if (null !== $this->fileInfo) {
            $this->fileInfo->validate();
        }
        if (null !== $this->mediaDetectionTaskResult) {
            $this->mediaDetectionTaskResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->estimatedWaitTimeInSeconds) {
            $res['estimatedWaitTimeInSeconds'] = $this->estimatedWaitTimeInSeconds;
        }

        if (null !== $this->fileInfo) {
            $res['fileInfo'] = null !== $this->fileInfo ? $this->fileInfo->toArray($noStream) : $this->fileInfo;
        }

        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }

        if (null !== $this->mediaDetectionTaskResult) {
            $res['mediaDetectionTaskResult'] = null !== $this->mediaDetectionTaskResult ? $this->mediaDetectionTaskResult->toArray($noStream) : $this->mediaDetectionTaskResult;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->statusReason) {
            $res['statusReason'] = $this->statusReason;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
        }

        if (null !== $this->videoUrl) {
            $res['videoUrl'] = $this->videoUrl;
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
        if (isset($map['estimatedWaitTimeInSeconds'])) {
            $model->estimatedWaitTimeInSeconds = $map['estimatedWaitTimeInSeconds'];
        }

        if (isset($map['fileInfo'])) {
            $model->fileInfo = fileInfo::fromMap($map['fileInfo']);
        }

        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }

        if (isset($map['mediaDetectionTaskResult'])) {
            $model->mediaDetectionTaskResult = mediaDetectionTaskResult::fromMap($map['mediaDetectionTaskResult']);
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['statusReason'])) {
            $model->statusReason = $map['statusReason'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        if (isset($map['videoUrl'])) {
            $model->videoUrl = $map['videoUrl'];
        }

        return $model;
    }
}
