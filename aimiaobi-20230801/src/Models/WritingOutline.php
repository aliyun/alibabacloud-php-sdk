<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class WritingOutline extends Model
{
    /**
     * @var OutlineWritingArticle[]
     */
    public $articles;

    /**
     * @var WritingOutline[]
     */
    public $children;

    /**
     * @var string
     */
    public $outline;

    /**
     * @var string
     */
    public $outlineId;

    /**
     * @var string[]
     */
    public $searchKeyWordList;

    /**
     * @var string
     */
    public $wordCount;

    /**
     * @var string
     */
    public $writingTips;
    protected $_name = [
        'articles' => 'Articles',
        'children' => 'Children',
        'outline' => 'Outline',
        'outlineId' => 'OutlineId',
        'searchKeyWordList' => 'SearchKeyWordList',
        'wordCount' => 'WordCount',
        'writingTips' => 'WritingTips',
    ];

    public function validate()
    {
        if (\is_array($this->articles)) {
            Model::validateArray($this->articles);
        }
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        if (\is_array($this->searchKeyWordList)) {
            Model::validateArray($this->searchKeyWordList);
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

        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['Children'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outline) {
            $res['Outline'] = $this->outline;
        }

        if (null !== $this->outlineId) {
            $res['OutlineId'] = $this->outlineId;
        }

        if (null !== $this->searchKeyWordList) {
            if (\is_array($this->searchKeyWordList)) {
                $res['SearchKeyWordList'] = [];
                $n1 = 0;
                foreach ($this->searchKeyWordList as $item1) {
                    $res['SearchKeyWordList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wordCount) {
            $res['WordCount'] = $this->wordCount;
        }

        if (null !== $this->writingTips) {
            $res['WritingTips'] = $this->writingTips;
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
                    $model->articles[$n1] = OutlineWritingArticle::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    $model->children[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Outline'])) {
            $model->outline = $map['Outline'];
        }

        if (isset($map['OutlineId'])) {
            $model->outlineId = $map['OutlineId'];
        }

        if (isset($map['SearchKeyWordList'])) {
            if (!empty($map['SearchKeyWordList'])) {
                $model->searchKeyWordList = [];
                $n1 = 0;
                foreach ($map['SearchKeyWordList'] as $item1) {
                    $model->searchKeyWordList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }

        if (isset($map['WritingTips'])) {
            $model->writingTips = $map['WritingTips'];
        }

        return $model;
    }
}
