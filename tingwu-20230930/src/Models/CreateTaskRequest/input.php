<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest;

use AlibabaCloud\Dara\Model;

class input extends Model
{
    /**
     * @var string
     */
    public $audioChannelMode;
    /**
     * @var string
     */
    public $fileUrl;
    /**
     * @var string
     */
    public $format;
    /**
     * @var string[]
     */
    public $languageHints;
    /**
     * @var bool
     */
    public $multipleStreamsEnabled;
    /**
     * @var string
     */
    public $outputPath;
    /**
     * @var bool
     */
    public $progressiveCallbacksEnabled;
    /**
     * @var int
     */
    public $sampleRate;
    /**
     * @var string
     */
    public $sourceLanguage;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskKey;
    protected $_name = [
        'audioChannelMode'            => 'AudioChannelMode',
        'fileUrl'                     => 'FileUrl',
        'format'                      => 'Format',
        'languageHints'               => 'LanguageHints',
        'multipleStreamsEnabled'      => 'MultipleStreamsEnabled',
        'outputPath'                  => 'OutputPath',
        'progressiveCallbacksEnabled' => 'ProgressiveCallbacksEnabled',
        'sampleRate'                  => 'SampleRate',
        'sourceLanguage'              => 'SourceLanguage',
        'taskId'                      => 'TaskId',
        'taskKey'                     => 'TaskKey',
    ];

    public function validate()
    {
        if (\is_array($this->languageHints)) {
            Model::validateArray($this->languageHints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioChannelMode) {
            $res['AudioChannelMode'] = $this->audioChannelMode;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->languageHints) {
            if (\is_array($this->languageHints)) {
                $res['LanguageHints'] = [];
                $n1                   = 0;
                foreach ($this->languageHints as $item1) {
                    $res['LanguageHints'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->multipleStreamsEnabled) {
            $res['MultipleStreamsEnabled'] = $this->multipleStreamsEnabled;
        }

        if (null !== $this->outputPath) {
            $res['OutputPath'] = $this->outputPath;
        }

        if (null !== $this->progressiveCallbacksEnabled) {
            $res['ProgressiveCallbacksEnabled'] = $this->progressiveCallbacksEnabled;
        }

        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }

        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskKey) {
            $res['TaskKey'] = $this->taskKey;
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
        if (isset($map['AudioChannelMode'])) {
            $model->audioChannelMode = $map['AudioChannelMode'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['LanguageHints'])) {
            if (!empty($map['LanguageHints'])) {
                $model->languageHints = [];
                $n1                   = 0;
                foreach ($map['LanguageHints'] as $item1) {
                    $model->languageHints[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MultipleStreamsEnabled'])) {
            $model->multipleStreamsEnabled = $map['MultipleStreamsEnabled'];
        }

        if (isset($map['OutputPath'])) {
            $model->outputPath = $map['OutputPath'];
        }

        if (isset($map['ProgressiveCallbacksEnabled'])) {
            $model->progressiveCallbacksEnabled = $map['ProgressiveCallbacksEnabled'];
        }

        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskKey'])) {
            $model->taskKey = $map['TaskKey'];
        }

        return $model;
    }
}
