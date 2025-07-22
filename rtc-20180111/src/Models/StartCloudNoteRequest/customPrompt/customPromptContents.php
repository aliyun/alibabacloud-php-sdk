<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudNoteRequest\customPrompt;

use AlibabaCloud\Tea\Model;

class customPromptContents extends Model
{
    /**
     * @example tingwu-turbo
     *
     * @var string
     */
    public $model;

    /**
     * @description This parameter is required.
     *
     * @example split-summary-demo
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 请帮我将下面的对话进行总结，根据发言人来总结:\n {Transcription}
     *
     * @var string
     */
    public $prompt;

    /**
     * @example chat
     *
     * @var string
     */
    public $transType;
    protected $_name = [
        'model' => 'Model',
        'name' => 'Name',
        'prompt' => 'Prompt',
        'transType' => 'TransType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->transType) {
            $res['TransType'] = $this->transType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customPromptContents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['TransType'])) {
            $model->transType = $map['TransType'];
        }

        return $model;
    }
}
