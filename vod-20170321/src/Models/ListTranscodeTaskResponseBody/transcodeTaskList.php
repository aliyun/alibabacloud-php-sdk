<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListTranscodeTaskResponseBody;

use AlibabaCloud\Tea\Model;

class transcodeTaskList extends Model
{
    /**
     * @description The time when the transcoding task was complete. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-01-23T12:40:12Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the transcoding task was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-01-23T12:35:12Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The status of the transcoding task. Valid values:
     *   **Processing**: In progress.
     *   **Partial**: Some transcoding jobs were complete.
     *   **CompleteAllSucc**: All transcoding jobs were successful.
     *   **CompleteAllFail**: All transcoding jobs failed. If an exception occurs in the source file, no transcoding job is initiated and the transcoding task fails.
     *   **CompletePartialSucc**: All transcoding jobs were complete but only some were successful.
     *
     * @example Processing
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The ID of the transcoding task.
     *
     * @example b1b65ab107*****ba3dbb900f6c1fe0
     *
     * @var string
     */
    public $transcodeTaskId;

    /**
     * @description The ID of the transcoding template group.
     *
     * @example b500c7094bd24*****f3e9900752d7c3
     *
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description The mode in which the transcoding task is triggered. Valid values:
     *   **Auto**: The transcoding task is automatically triggered when the video is uploaded.
     *   **Manual**: The transcoding task is triggered by calling the SubmitTranscodeJobs operation.
     *
     * @example Auto
     *
     * @var string
     */
    public $trigger;

    /**
     * @description The ID of the audio or video file.
     *
     * @example d4860fcc6a5*****bce9fed52e893824
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'completeTime'             => 'CompleteTime',
        'creationTime'             => 'CreationTime',
        'taskStatus'               => 'TaskStatus',
        'transcodeTaskId'          => 'TranscodeTaskId',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'trigger'                  => 'Trigger',
        'videoId'                  => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->transcodeTaskId) {
            $res['TranscodeTaskId'] = $this->transcodeTaskId;
        }
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = $this->trigger;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeTaskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TranscodeTaskId'])) {
            $model->transcodeTaskId = $map['TranscodeTaskId'];
        }
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = $map['Trigger'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
