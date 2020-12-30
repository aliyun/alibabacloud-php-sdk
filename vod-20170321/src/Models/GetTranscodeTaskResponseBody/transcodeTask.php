<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask\transcodeJobInfoList;
use AlibabaCloud\Tea\Model;

class transcodeTask extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $trigger;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $completeTime;

    /**
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @var string
     */
    public $transcodeTaskId;

    /**
     * @var transcodeJobInfoList[]
     */
    public $transcodeJobInfoList;
    protected $_name = [
        'creationTime'             => 'CreationTime',
        'trigger'                  => 'Trigger',
        'taskStatus'               => 'TaskStatus',
        'videoId'                  => 'VideoId',
        'completeTime'             => 'CompleteTime',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeTaskId'          => 'TranscodeTaskId',
        'transcodeJobInfoList'     => 'TranscodeJobInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = $this->trigger;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
        }
        if (null !== $this->transcodeTaskId) {
            $res['TranscodeTaskId'] = $this->transcodeTaskId;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = $map['Trigger'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }
        if (isset($map['TranscodeTaskId'])) {
            $model->transcodeTaskId = $map['TranscodeTaskId'];
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

        return $model;
    }
}
