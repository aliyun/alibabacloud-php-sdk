<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\generateTraceability;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\multimodalSearchResultList;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\referenceList;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\textGenerateMultimodalMediaList;

class timelineResult extends Model
{
    /**
     * @var bool
     */
    public $generateFinished;

    /**
     * @var generateTraceability
     */
    public $generateTraceability;

    /**
     * @var multimodalSearchResultList[]
     */
    public $multimodalSearchResultList;

    /**
     * @var string
     */
    public $reasonTextGenerate;

    /**
     * @var referenceList[]
     */
    public $referenceList;

    /**
     * @var string
     */
    public $textGenerate;

    /**
     * @var textGenerateMultimodalMediaList[]
     */
    public $textGenerateMultimodalMediaList;
    protected $_name = [
        'generateFinished' => 'GenerateFinished',
        'generateTraceability' => 'GenerateTraceability',
        'multimodalSearchResultList' => 'MultimodalSearchResultList',
        'reasonTextGenerate' => 'ReasonTextGenerate',
        'referenceList' => 'ReferenceList',
        'textGenerate' => 'TextGenerate',
        'textGenerateMultimodalMediaList' => 'TextGenerateMultimodalMediaList',
    ];

    public function validate()
    {
        if (null !== $this->generateTraceability) {
            $this->generateTraceability->validate();
        }
        if (\is_array($this->multimodalSearchResultList)) {
            Model::validateArray($this->multimodalSearchResultList);
        }
        if (\is_array($this->referenceList)) {
            Model::validateArray($this->referenceList);
        }
        if (\is_array($this->textGenerateMultimodalMediaList)) {
            Model::validateArray($this->textGenerateMultimodalMediaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['GenerateFinished'] = $this->generateFinished;
        }

        if (null !== $this->generateTraceability) {
            $res['GenerateTraceability'] = null !== $this->generateTraceability ? $this->generateTraceability->toArray($noStream) : $this->generateTraceability;
        }

        if (null !== $this->multimodalSearchResultList) {
            if (\is_array($this->multimodalSearchResultList)) {
                $res['MultimodalSearchResultList'] = [];
                $n1 = 0;
                foreach ($this->multimodalSearchResultList as $item1) {
                    $res['MultimodalSearchResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reasonTextGenerate) {
            $res['ReasonTextGenerate'] = $this->reasonTextGenerate;
        }

        if (null !== $this->referenceList) {
            if (\is_array($this->referenceList)) {
                $res['ReferenceList'] = [];
                $n1 = 0;
                foreach ($this->referenceList as $item1) {
                    $res['ReferenceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->textGenerate) {
            $res['TextGenerate'] = $this->textGenerate;
        }

        if (null !== $this->textGenerateMultimodalMediaList) {
            if (\is_array($this->textGenerateMultimodalMediaList)) {
                $res['TextGenerateMultimodalMediaList'] = [];
                $n1 = 0;
                foreach ($this->textGenerateMultimodalMediaList as $item1) {
                    $res['TextGenerateMultimodalMediaList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['GenerateFinished'])) {
            $model->generateFinished = $map['GenerateFinished'];
        }

        if (isset($map['GenerateTraceability'])) {
            $model->generateTraceability = generateTraceability::fromMap($map['GenerateTraceability']);
        }

        if (isset($map['MultimodalSearchResultList'])) {
            if (!empty($map['MultimodalSearchResultList'])) {
                $model->multimodalSearchResultList = [];
                $n1 = 0;
                foreach ($map['MultimodalSearchResultList'] as $item1) {
                    $model->multimodalSearchResultList[$n1] = multimodalSearchResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReasonTextGenerate'])) {
            $model->reasonTextGenerate = $map['ReasonTextGenerate'];
        }

        if (isset($map['ReferenceList'])) {
            if (!empty($map['ReferenceList'])) {
                $model->referenceList = [];
                $n1 = 0;
                foreach ($map['ReferenceList'] as $item1) {
                    $model->referenceList[$n1] = referenceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TextGenerate'])) {
            $model->textGenerate = $map['TextGenerate'];
        }

        if (isset($map['TextGenerateMultimodalMediaList'])) {
            if (!empty($map['TextGenerateMultimodalMediaList'])) {
                $model->textGenerateMultimodalMediaList = [];
                $n1 = 0;
                foreach ($map['TextGenerateMultimodalMediaList'] as $item1) {
                    $model->textGenerateMultimodalMediaList[$n1] = textGenerateMultimodalMediaList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
