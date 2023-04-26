<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask\transcodeJobInfoList;
use AlibabaCloud\Tea\Model;

class transcodeTask extends Model
{
    /**
     * @description The Object Storage Service (OSS) URL of the input file.
     *
     * @example 2019-01-23T12:40:12Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The operation that you want to perform. Set the value to **GetTranscodeTask**.
     *
     * @example 2019-01-23T12:35:12Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The mode in which the transcoding task is triggered. Valid values:
     *
     *   **Auto**: The transcoding task is automatically triggered when the video is uploaded.
     *   **Manual**: The transcoding task is triggered by calling the SubmitTranscodeJobs operation.
     *
     * @example Processing
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The information about the output file.
     *
     * @var transcodeJobInfoList[]
     */
    public $transcodeJobInfoList;

    /**
     * @description The container format of the output file.
     *
     * @example b1b65ab107e14*****3dbb900f6c1fe0
     *
     * @var string
     */
    public $transcodeTaskId;

    /**
     * @description The ID of the transcoding task. You can use one of the following methods to obtain the ID:
     *
     *   Obtain the value of TranscodeTaskId from the response to the [SubmitTranscodeJobs](~~68570~~) operation.
     *   Obtain the value of TranscodeTaskId from the response to the [ListTranscodeTask](~~109120~~) operation.
     *
     * @example b500c7094bd241*****3e9900752d7c3
     *
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @description The video streams.
     *
     * @example Auto
     *
     * @var string
     */
    public $trigger;

    /**
     * @description The ID of the transcoding template.
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
