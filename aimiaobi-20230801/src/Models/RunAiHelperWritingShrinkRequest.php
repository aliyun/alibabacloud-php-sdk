<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunAiHelperWritingShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $distributeWriting;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $promptMode;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $writingParamsShrink;

    /**
     * @var string
     */
    public $writingScene;

    /**
     * @var string
     */
    public $writingStyle;
    protected $_name = [
        'distributeWriting' => 'DistributeWriting',
        'prompt' => 'Prompt',
        'promptMode' => 'PromptMode',
        'workspaceId' => 'WorkspaceId',
        'writingParamsShrink' => 'WritingParams',
        'writingScene' => 'WritingScene',
        'writingStyle' => 'WritingStyle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distributeWriting) {
            $res['DistributeWriting'] = $this->distributeWriting;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->promptMode) {
            $res['PromptMode'] = $this->promptMode;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        if (null !== $this->writingParamsShrink) {
            $res['WritingParams'] = $this->writingParamsShrink;
        }

        if (null !== $this->writingScene) {
            $res['WritingScene'] = $this->writingScene;
        }

        if (null !== $this->writingStyle) {
            $res['WritingStyle'] = $this->writingStyle;
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
        if (isset($map['DistributeWriting'])) {
            $model->distributeWriting = $map['DistributeWriting'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['PromptMode'])) {
            $model->promptMode = $map['PromptMode'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['WritingParams'])) {
            $model->writingParamsShrink = $map['WritingParams'];
        }

        if (isset($map['WritingScene'])) {
            $model->writingScene = $map['WritingScene'];
        }

        if (isset($map['WritingStyle'])) {
            $model->writingStyle = $map['WritingStyle'];
        }

        return $model;
    }
}
