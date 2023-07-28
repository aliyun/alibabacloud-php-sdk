<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask\transcodeJobInfoList;
use AlibabaCloud\Tea\Model;

class transcodeTask extends Model
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
     *
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
     * @description Details about transcoding jobs.
     *
     * @var transcodeJobInfoList[]
     */
    public $transcodeJobInfoList;

    /**
     * @description The ID of the transcoding task.
     *
     * @example b1b65ab107e14*****3dbb900f6c1fe0
     *
     * @var string
     */
    public $transcodeTaskId;

    /**
     * @description The ID of the transcoding template group.
     *
     * @example b500c7094bd241*****3e9900752d7c3
     *
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description The mode in which the transcoding task is triggered. Valid values:
     *
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
     * @example 883f5d98107*****b7f20aaa352f
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'completeTime'             => 'CompleteTime',
        'creationTime'             => 'CreationTime',
        'taskStatus'               => 'TaskStatus',
        'transcodeJobInfoList'     => 'TranscodeJobInfoList',
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
        if (null !== $this->transcodeJobInfoList) {
            $res['TranscodeJobInfoList'] = [];
            if (null !== $this->transcodeJobInfoList && \is_array($this->transcodeJobInfoList)) {
                $n = 0;
                foreach ($this->transcodeJobInfoList as $item) {
                    $res['TranscodeJobInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return transcodeTask
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
        if (isset($map['TranscodeJobInfoList'])) {
            if (!empty($map['TranscodeJobInfoList'])) {
                $model->transcodeJobInfoList = [];
                $n                           = 0;
                foreach ($map['TranscodeJobInfoList'] as $item) {
                    $model->transcodeJobInfoList[$n++] = null !== $item ? transcodeJobInfoList::fromMap($item) : $item;
                }
            }
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
