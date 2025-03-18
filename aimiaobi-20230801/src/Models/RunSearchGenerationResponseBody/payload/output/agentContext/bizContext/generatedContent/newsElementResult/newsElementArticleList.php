<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList\article;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult\newsElementArticleList\newsElementList;
use AlibabaCloud\Tea\Model;

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
     * @example xx
     *
     * @var string
     */
    public $textGenerate;
    protected $_name = [
        'article' => 'Article',
        'newsElementList' => 'NewsElementList',
        'textGenerate' => 'TextGenerate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->article) {
            $res['Article'] = null !== $this->article ? $this->article->toMap() : null;
        }
        if (null !== $this->newsElementList) {
            $res['NewsElementList'] = [];
            if (null !== $this->newsElementList && \is_array($this->newsElementList)) {
                $n = 0;
                foreach ($this->newsElementList as $item) {
                    $res['NewsElementList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->textGenerate) {
            $res['TextGenerate'] = $this->textGenerate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return newsElementArticleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Article'])) {
            $model->article = article::fromMap($map['Article']);
        }
        if (isset($map['NewsElementList'])) {
            if (!empty($map['NewsElementList'])) {
                $model->newsElementList = [];
                $n = 0;
                foreach ($map['NewsElementList'] as $item) {
                    $model->newsElementList[$n++] = null !== $item ? newsElementList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TextGenerate'])) {
            $model->textGenerate = $map['TextGenerate'];
        }

        return $model;
    }
}
