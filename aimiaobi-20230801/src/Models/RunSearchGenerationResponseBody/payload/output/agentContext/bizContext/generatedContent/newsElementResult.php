<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList;

class newsElementResult extends Model
{
    /**
     * @var bool
     */
    public $generateFinished;

    /**
     * @var newsElementArticleList[]
     */
    public $newsElementArticleList;

    /**
     * @var string
     */
    public $textGenerate;
    protected $_name = [
        'generateFinished' => 'GenerateFinished',
        'newsElementArticleList' => 'NewsElementArticleList',
        'textGenerate' => 'TextGenerate',
    ];

    public function validate()
    {
        if (\is_array($this->newsElementArticleList)) {
            Model::validateArray($this->newsElementArticleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['GenerateFinished'] = $this->generateFinished;
        }

        if (null !== $this->newsElementArticleList) {
            if (\is_array($this->newsElementArticleList)) {
                $res['NewsElementArticleList'] = [];
                $n1 = 0;
                foreach ($this->newsElementArticleList as $item1) {
                    $res['NewsElementArticleList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['NewsElementArticleList'])) {
            if (!empty($map['NewsElementArticleList'])) {
                $model->newsElementArticleList = [];
                $n1 = 0;
                foreach ($map['NewsElementArticleList'] as $item1) {
                    $model->newsElementArticleList[$n1++] = newsElementArticleList::fromMap($item1);
                }
            }
        }

        if (isset($map['TextGenerate'])) {
            $model->textGenerate = $map['TextGenerate'];
        }

        return $model;
    }
}
