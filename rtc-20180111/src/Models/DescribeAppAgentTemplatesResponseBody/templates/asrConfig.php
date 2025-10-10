<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates\asrConfig\vadConfig;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppAgentTemplatesResponseBody\templates\asrConfig\wordWeights;

class asrConfig extends Model
{
    /**
     * @var int
     */
    public $maxSentenceSilence;

    /**
     * @var string
     */
    public $name;

    /**
     * @var vadConfig
     */
    public $vadConfig;

    /**
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

    public function validate()
    {
        if (null !== $this->vadConfig) {
            $this->vadConfig->validate();
        }
        if (\is_array($this->wordWeights)) {
            Model::validateArray($this->wordWeights);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxSentenceSilence) {
            $res['MaxSentenceSilence'] = $this->maxSentenceSilence;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->vadConfig) {
            $res['VadConfig'] = null !== $this->vadConfig ? $this->vadConfig->toArray($noStream) : $this->vadConfig;
        }

        if (null !== $this->vocabularyId) {
            $res['VocabularyId'] = $this->vocabularyId;
        }

        if (null !== $this->wordWeights) {
            if (\is_array($this->wordWeights)) {
                $res['WordWeights'] = [];
                $n1 = 0;
                foreach ($this->wordWeights as $item1) {
                    $res['WordWeights'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['WordWeights'] as $item1) {
                    $model->wordWeights[$n1] = wordWeights::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
