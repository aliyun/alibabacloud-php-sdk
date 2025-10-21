<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class RunVideoDetectShotRequest extends Model
{
    /**
     * @var string
     */
    public $intelliSimpPrompt;

    /**
     * @var string
     */
    public $intelliSimpPromptTemplateId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $modelCustomPromptTemplateId;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelVlCustomPromptTemplateId;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var string
     */
    public $originalSessionId;

    /**
     * @var string
     */
    public $preModelId;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string[]
     */
    public $recognitionOptions;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var string
     */
    public $vlPrompt;
    protected $_name = [
        'intelliSimpPrompt' => 'intelliSimpPrompt',
        'intelliSimpPromptTemplateId' => 'intelliSimpPromptTemplateId',
        'language' => 'language',
        'modelCustomPromptTemplateId' => 'modelCustomPromptTemplateId',
        'modelId' => 'modelId',
        'modelVlCustomPromptTemplateId' => 'modelVlCustomPromptTemplateId',
        'options' => 'options',
        'originalSessionId' => 'originalSessionId',
        'preModelId' => 'preModelId',
        'prompt' => 'prompt',
        'recognitionOptions' => 'recognitionOptions',
        'taskId' => 'taskId',
        'videoUrl' => 'videoUrl',
        'vlPrompt' => 'vlPrompt',
    ];

    public function validate()
    {
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (\is_array($this->recognitionOptions)) {
            Model::validateArray($this->recognitionOptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intelliSimpPrompt) {
            $res['intelliSimpPrompt'] = $this->intelliSimpPrompt;
        }

        if (null !== $this->intelliSimpPromptTemplateId) {
            $res['intelliSimpPromptTemplateId'] = $this->intelliSimpPromptTemplateId;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->modelCustomPromptTemplateId) {
            $res['modelCustomPromptTemplateId'] = $this->modelCustomPromptTemplateId;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->modelVlCustomPromptTemplateId) {
            $res['modelVlCustomPromptTemplateId'] = $this->modelVlCustomPromptTemplateId;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['options'] = [];
                $n1 = 0;
                foreach ($this->options as $item1) {
                    $res['options'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->originalSessionId) {
            $res['originalSessionId'] = $this->originalSessionId;
        }

        if (null !== $this->preModelId) {
            $res['preModelId'] = $this->preModelId;
        }

        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }

        if (null !== $this->recognitionOptions) {
            if (\is_array($this->recognitionOptions)) {
                $res['recognitionOptions'] = [];
                $n1 = 0;
                foreach ($this->recognitionOptions as $item1) {
                    $res['recognitionOptions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->videoUrl) {
            $res['videoUrl'] = $this->videoUrl;
        }

        if (null !== $this->vlPrompt) {
            $res['vlPrompt'] = $this->vlPrompt;
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
        if (isset($map['intelliSimpPrompt'])) {
            $model->intelliSimpPrompt = $map['intelliSimpPrompt'];
        }

        if (isset($map['intelliSimpPromptTemplateId'])) {
            $model->intelliSimpPromptTemplateId = $map['intelliSimpPromptTemplateId'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['modelCustomPromptTemplateId'])) {
            $model->modelCustomPromptTemplateId = $map['modelCustomPromptTemplateId'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['modelVlCustomPromptTemplateId'])) {
            $model->modelVlCustomPromptTemplateId = $map['modelVlCustomPromptTemplateId'];
        }

        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                $n1 = 0;
                foreach ($map['options'] as $item1) {
                    $model->options[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['originalSessionId'])) {
            $model->originalSessionId = $map['originalSessionId'];
        }

        if (isset($map['preModelId'])) {
            $model->preModelId = $map['preModelId'];
        }

        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }

        if (isset($map['recognitionOptions'])) {
            if (!empty($map['recognitionOptions'])) {
                $model->recognitionOptions = [];
                $n1 = 0;
                foreach ($map['recognitionOptions'] as $item1) {
                    $model->recognitionOptions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['videoUrl'])) {
            $model->videoUrl = $map['videoUrl'];
        }

        if (isset($map['vlPrompt'])) {
            $model->vlPrompt = $map['vlPrompt'];
        }

        return $model;
    }
}
