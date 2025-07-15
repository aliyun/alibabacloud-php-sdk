<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig\speechConfig\asrConfig;
use AlibabaCloud\Tea\Model;

class speechConfig extends Model
{
    /**
     * @var asrConfig
     */
    public $asrConfig;

    /**
     * @example 0
     *
     * @var float
     */
    public $speechRate;

    /**
     * @var string
     */
    public $style;

    /**
     * @var string
     */
    public $voice;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $volume;
    protected $_name = [
        'asrConfig' => 'AsrConfig',
        'speechRate' => 'SpeechRate',
        'style' => 'Style',
        'voice' => 'Voice',
        'volume' => 'Volume',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrConfig) {
            $res['AsrConfig'] = null !== $this->asrConfig ? $this->asrConfig->toMap() : null;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }
        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return speechConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrConfig'])) {
            $model->asrConfig = asrConfig::fromMap($map['AsrConfig']);
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }
        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
