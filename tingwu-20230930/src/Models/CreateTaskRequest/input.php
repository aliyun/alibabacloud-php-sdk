<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest;

use AlibabaCloud\Tea\Model;

class input extends Model
{
    /**
     * @example http://xxx.com/zzz/1.wav
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example pcm
     *
     * @var string
     */
    public $format;

    /**
     * @var bool
     */
    public $progressiveCallbacksEnabled;

    /**
     * @example 16000
     *
     * @var int
     */
    public $sampleRate;

    /**
     * @example cn
     *
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @example task_tingwu_123
     *
     * @var string
     */
    public $taskKey;
    protected $_name = [
        'fileUrl'                     => 'FileUrl',
        'format'                      => 'Format',
        'progressiveCallbacksEnabled' => 'ProgressiveCallbacksEnabled',
        'sampleRate'                  => 'SampleRate',
        'sourceLanguage'              => 'SourceLanguage',
        'taskId'                      => 'TaskId',
        'taskKey'                     => 'TaskKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
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

    /**
     * @param array $map
     *
     * @return input
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
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
