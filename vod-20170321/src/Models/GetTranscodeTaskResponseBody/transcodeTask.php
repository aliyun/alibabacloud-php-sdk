<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask\transcodeJobInfoList;

class transcodeTask extends Model
{
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
    public $taskStatus;

    /**
     * @var transcodeJobInfoList[]
     */
    public $transcodeJobInfoList;

    /**
     * @var string
     */
    public $transcodeTaskId;

    /**
     * @var string
     */
    public $transcodeTemplateGroupId;

    /**
     * @var string
     */
    public $trigger;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'completeTime' => 'CompleteTime',
        'creationTime' => 'CreationTime',
        'taskStatus' => 'TaskStatus',
        'transcodeJobInfoList' => 'TranscodeJobInfoList',
        'transcodeTaskId' => 'TranscodeTaskId',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'trigger' => 'Trigger',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        if (\is_array($this->transcodeJobInfoList)) {
            Model::validateArray($this->transcodeJobInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->transcodeJobInfoList)) {
                $res['TranscodeJobInfoList'] = [];
                $n1 = 0;
                foreach ($this->transcodeJobInfoList as $item1) {
                    $res['TranscodeJobInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['TranscodeJobInfoList'] as $item1) {
                    $model->transcodeJobInfoList[$n1] = transcodeJobInfoList::fromMap($item1);
                    ++$n1;
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
