<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentTemplateRequest;

use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentTemplateRequest\asrConfig\vadConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentTemplateRequest\asrConfig\wordWeights;
use AlibabaCloud\Tea\Model;

class asrConfig extends Model
{
    /**
     * @example 500
     *
     * @var int
     */
    public $maxSentenceSilence;

    /**
     * @description This parameter is required.
     *
     * @example STT
     *
     * @var string
     */
    public $name;

    /**
     * @var vadConfig
     */
    public $vadConfig;

    /**
     * @example 0bb1776b1745123332074d1b6b
     *
     * @var string
     */
    public $vocabularyId;

    /**
     * @var wordWeights[]
     */
    public $wordWeights;
    protected $_name = [
        'maxSentenceSilence' => 'MaxSentenceSilence',
        'name' => 'Name',
        'vadConfig' => 'VadConfig',
        'vocabularyId' => 'VocabularyId',
        'wordWeights' => 'WordWeights',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxSentenceSilence) {
            $res['MaxSentenceSilence'] = $this->maxSentenceSilence;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->vadConfig) {
            $res['VadConfig'] = null !== $this->vadConfig ? $this->vadConfig->toMap() : null;
        }
        if (null !== $this->vocabularyId) {
            $res['VocabularyId'] = $this->vocabularyId;
        }
        if (null !== $this->wordWeights) {
            $res['WordWeights'] = [];
            if (null !== $this->wordWeights && \is_array($this->wordWeights)) {
                $n = 0;
                foreach ($this->wordWeights as $item) {
                    $res['WordWeights'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asrConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxSentenceSilence'])) {
            $model->maxSentenceSilence = $map['MaxSentenceSilence'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VadConfig'])) {
            $model->vadConfig = vadConfig::fromMap($map['VadConfig']);
        }
        if (isset($map['VocabularyId'])) {
            $model->vocabularyId = $map['VocabularyId'];
        }
        if (isset($map['WordWeights'])) {
            if (!empty($map['WordWeights'])) {
                $model->wordWeights = [];
                $n = 0;
                foreach ($map['WordWeights'] as $item) {
                    $model->wordWeights[$n++] = null !== $item ? wordWeights::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
