<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class RunAiHelperWritingRequest extends Model
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
     * @var string[]
     */
    public $writingParams;

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
        'writingParams' => 'WritingParams',
        'writingScene' => 'WritingScene',
        'writingStyle' => 'WritingStyle',
    ];

    public function validate()
    {
        if (\is_array($this->writingParams)) {
            Model::validateArray($this->writingParams);
        }
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

        if (null !== $this->writingParams) {
            if (\is_array($this->writingParams)) {
                $res['WritingParams'] = [];
                foreach ($this->writingParams as $key1 => $value1) {
                    $res['WritingParams'][$key1] = $value1;
                }
            }
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
            if (!empty($map['WritingParams'])) {
                $model->writingParams = [];
                foreach ($map['WritingParams'] as $key1 => $value1) {
                    $model->writingParams[$key1] = $value1;
                }
            }
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
