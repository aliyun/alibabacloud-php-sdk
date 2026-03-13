<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class AsyncCreateClipsTimeLineShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $additionalContent;

    /**
     * @var string
     */
    public $customContent;

    /**
     * @var string
     */
    public $highLightConfigShrink;

    /**
     * @var bool
     */
    public $noRefVideo;

    /**
     * @var string
     */
    public $processPrompt;

    /**
     * @var bool
     */
    public $recommendAudio;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $timelineScene;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'additionalContent' => 'AdditionalContent',
        'customContent' => 'CustomContent',
        'highLightConfigShrink' => 'HighLightConfig',
        'noRefVideo' => 'NoRefVideo',
        'processPrompt' => 'ProcessPrompt',
        'recommendAudio' => 'RecommendAudio',
        'taskId' => 'TaskId',
        'timelineScene' => 'TimelineScene',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalContent) {
            $res['AdditionalContent'] = $this->additionalContent;
        }

        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }

        if (null !== $this->highLightConfigShrink) {
            $res['HighLightConfig'] = $this->highLightConfigShrink;
        }

        if (null !== $this->noRefVideo) {
            $res['NoRefVideo'] = $this->noRefVideo;
        }

        if (null !== $this->processPrompt) {
            $res['ProcessPrompt'] = $this->processPrompt;
        }

        if (null !== $this->recommendAudio) {
            $res['RecommendAudio'] = $this->recommendAudio;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->timelineScene) {
            $res['TimelineScene'] = $this->timelineScene;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AdditionalContent'])) {
            $model->additionalContent = $map['AdditionalContent'];
        }

        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }

        if (isset($map['HighLightConfig'])) {
            $model->highLightConfigShrink = $map['HighLightConfig'];
        }

        if (isset($map['NoRefVideo'])) {
            $model->noRefVideo = $map['NoRefVideo'];
        }

        if (isset($map['ProcessPrompt'])) {
            $model->processPrompt = $map['ProcessPrompt'];
        }

        if (isset($map['RecommendAudio'])) {
            $model->recommendAudio = $map['RecommendAudio'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TimelineScene'])) {
            $model->timelineScene = $map['TimelineScene'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
