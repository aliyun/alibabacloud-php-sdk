<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2ResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateTraceability;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\OutlineSearchResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2ResponseBody\payload\output\articles;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\WritingOutline;

class output extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @var GenerateTraceability
     */
    public $generateTraceability;

    /**
     * @var string[]
     */
    public $miniDoc;

    /**
     * @var WritingOutline[]
     */
    public $outlines;

    /**
     * @var string
     */
    public $searchQuery;

    /**
     * @var OutlineSearchResult
     */
    public $searchResult;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'articles' => 'Articles',
        'generateTraceability' => 'GenerateTraceability',
        'miniDoc' => 'MiniDoc',
        'outlines' => 'Outlines',
        'searchQuery' => 'SearchQuery',
        'searchResult' => 'SearchResult',
        'text' => 'Text',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->articles)) {
            Model::validateArray($this->articles);
        }
        if (null !== $this->generateTraceability) {
            $this->generateTraceability->validate();
        }
        if (\is_array($this->miniDoc)) {
            Model::validateArray($this->miniDoc);
        }
        if (\is_array($this->outlines)) {
            Model::validateArray($this->outlines);
        }
        if (null !== $this->searchResult) {
            $this->searchResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articles) {
            if (\is_array($this->articles)) {
                $res['Articles'] = [];
                $n1 = 0;
                foreach ($this->articles as $item1) {
                    $res['Articles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->generateTraceability) {
            $res['GenerateTraceability'] = null !== $this->generateTraceability ? $this->generateTraceability->toArray($noStream) : $this->generateTraceability;
        }

        if (null !== $this->miniDoc) {
            if (\is_array($this->miniDoc)) {
                $res['MiniDoc'] = [];
                $n1 = 0;
                foreach ($this->miniDoc as $item1) {
                    $res['MiniDoc'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outlines) {
            if (\is_array($this->outlines)) {
                $res['Outlines'] = [];
                $n1 = 0;
                foreach ($this->outlines as $item1) {
                    $res['Outlines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchQuery) {
            $res['SearchQuery'] = $this->searchQuery;
        }

        if (null !== $this->searchResult) {
            $res['SearchResult'] = null !== $this->searchResult ? $this->searchResult->toArray($noStream) : $this->searchResult;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Articles'])) {
            if (!empty($map['Articles'])) {
                $model->articles = [];
                $n1 = 0;
                foreach ($map['Articles'] as $item1) {
                    $model->articles[$n1] = articles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GenerateTraceability'])) {
            $model->generateTraceability = GenerateTraceability::fromMap($map['GenerateTraceability']);
        }

        if (isset($map['MiniDoc'])) {
            if (!empty($map['MiniDoc'])) {
                $model->miniDoc = [];
                $n1 = 0;
                foreach ($map['MiniDoc'] as $item1) {
                    $model->miniDoc[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Outlines'])) {
            if (!empty($map['Outlines'])) {
                $model->outlines = [];
                $n1 = 0;
                foreach ($map['Outlines'] as $item1) {
                    $model->outlines[$n1] = WritingOutline::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SearchQuery'])) {
            $model->searchQuery = $map['SearchQuery'];
        }

        if (isset($map['SearchResult'])) {
            $model->searchResult = OutlineSearchResult::fromMap($map['SearchResult']);
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
