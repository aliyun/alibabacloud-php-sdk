<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList\article;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList\newsElementList;

class newsElementArticleList extends Model
{
    /**
     * @var article
     */
    public $article;

    /**
     * @var newsElementList[]
     */
    public $newsElementList;

    /**
     * @var string
     */
    public $textGenerate;
    protected $_name = [
        'article' => 'Article',
        'newsElementList' => 'NewsElementList',
        'textGenerate' => 'TextGenerate',
    ];

    public function validate()
    {
        if (null !== $this->article) {
            $this->article->validate();
        }
        if (\is_array($this->newsElementList)) {
            Model::validateArray($this->newsElementList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->article) {
            $res['Article'] = null !== $this->article ? $this->article->toArray($noStream) : $this->article;
        }

        if (null !== $this->newsElementList) {
            if (\is_array($this->newsElementList)) {
                $res['NewsElementList'] = [];
                $n1 = 0;
                foreach ($this->newsElementList as $item1) {
                    $res['NewsElementList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Article'])) {
            $model->article = article::fromMap($map['Article']);
        }

        if (isset($map['NewsElementList'])) {
            if (!empty($map['NewsElementList'])) {
                $model->newsElementList = [];
                $n1 = 0;
                foreach ($map['NewsElementList'] as $item1) {
                    $model->newsElementList[$n1] = newsElementList::fromMap($item1);
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
