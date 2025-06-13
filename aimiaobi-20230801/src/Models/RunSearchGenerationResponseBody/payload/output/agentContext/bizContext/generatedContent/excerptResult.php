<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult\searchResult;

class excerptResult extends Model
{
    /**
     * @var bool
     */
    public $generateFinished;

    /**
     * @var string
     */
    public $generateLevel;

    /**
     * @var string
     */
    public $reasonTextGenerate;

    /**
     * @var searchResult[]
     */
    public $searchResult;

    /**
     * @var string
     */
    public $textGenerate;
    protected $_name = [
        'generateFinished' => 'GenerateFinished',
        'generateLevel' => 'GenerateLevel',
        'reasonTextGenerate' => 'ReasonTextGenerate',
        'searchResult' => 'SearchResult',
        'textGenerate' => 'TextGenerate',
    ];

    public function validate()
    {
        if (\is_array($this->searchResult)) {
            Model::validateArray($this->searchResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['GenerateFinished'] = $this->generateFinished;
        }

        if (null !== $this->generateLevel) {
            $res['GenerateLevel'] = $this->generateLevel;
        }

        if (null !== $this->reasonTextGenerate) {
            $res['ReasonTextGenerate'] = $this->reasonTextGenerate;
        }

        if (null !== $this->searchResult) {
            if (\is_array($this->searchResult)) {
                $res['SearchResult'] = [];
                $n1 = 0;
                foreach ($this->searchResult as $item1) {
                    $res['SearchResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->textGenerate) {
            $res['TextGenerate'] = $this->textGenerate;
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

        if (isset($map['GenerateLevel'])) {
            $model->generateLevel = $map['GenerateLevel'];
        }

        if (isset($map['ReasonTextGenerate'])) {
            $model->reasonTextGenerate = $map['ReasonTextGenerate'];
        }

        if (isset($map['SearchResult'])) {
            if (!empty($map['SearchResult'])) {
                $model->searchResult = [];
                $n1 = 0;
                foreach ($map['SearchResult'] as $item1) {
                    $model->searchResult[$n1] = searchResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TextGenerate'])) {
            $model->textGenerate = $map['TextGenerate'];
        }

        return $model;
    }
}
