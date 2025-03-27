<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponseBody\data\questionList;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponseBody\data\sceneList;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponseBody\data\sentenceList;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponseBody\data\theme;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponseBody\data\topic;
use AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponseBody\data\wordList;

class data extends Model
{
    /**
     * @var string
     */
    public $articleId;

    /**
     * @var questionList[]
     */
    public $questionList;

    /**
     * @var sceneList[]
     */
    public $sceneList;

    /**
     * @var sentenceList[]
     */
    public $sentenceList;

    /**
     * @var string
     */
    public $target;

    /**
     * @var theme
     */
    public $theme;

    /**
     * @var topic
     */
    public $topic;

    /**
     * @var wordList[]
     */
    public $wordList;
    protected $_name = [
        'articleId' => 'articleId',
        'questionList' => 'questionList',
        'sceneList' => 'sceneList',
        'sentenceList' => 'sentenceList',
        'target' => 'target',
        'theme' => 'theme',
        'topic' => 'topic',
        'wordList' => 'wordList',
    ];

    public function validate()
    {
        if (\is_array($this->questionList)) {
            Model::validateArray($this->questionList);
        }
        if (\is_array($this->sceneList)) {
            Model::validateArray($this->sceneList);
        }
        if (\is_array($this->sentenceList)) {
            Model::validateArray($this->sentenceList);
        }
        if (null !== $this->theme) {
            $this->theme->validate();
        }
        if (null !== $this->topic) {
            $this->topic->validate();
        }
        if (\is_array($this->wordList)) {
            Model::validateArray($this->wordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articleId) {
            $res['articleId'] = $this->articleId;
        }

        if (null !== $this->questionList) {
            if (\is_array($this->questionList)) {
                $res['questionList'] = [];
                $n1 = 0;
                foreach ($this->questionList as $item1) {
                    $res['questionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sceneList) {
            if (\is_array($this->sceneList)) {
                $res['sceneList'] = [];
                $n1 = 0;
                foreach ($this->sceneList as $item1) {
                    $res['sceneList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sentenceList) {
            if (\is_array($this->sentenceList)) {
                $res['sentenceList'] = [];
                $n1 = 0;
                foreach ($this->sentenceList as $item1) {
                    $res['sentenceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        if (null !== $this->theme) {
            $res['theme'] = null !== $this->theme ? $this->theme->toArray($noStream) : $this->theme;
        }

        if (null !== $this->topic) {
            $res['topic'] = null !== $this->topic ? $this->topic->toArray($noStream) : $this->topic;
        }

        if (null !== $this->wordList) {
            if (\is_array($this->wordList)) {
                $res['wordList'] = [];
                $n1 = 0;
                foreach ($this->wordList as $item1) {
                    $res['wordList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['articleId'])) {
            $model->articleId = $map['articleId'];
        }

        if (isset($map['questionList'])) {
            if (!empty($map['questionList'])) {
                $model->questionList = [];
                $n1 = 0;
                foreach ($map['questionList'] as $item1) {
                    $model->questionList[$n1++] = questionList::fromMap($item1);
                }
            }
        }

        if (isset($map['sceneList'])) {
            if (!empty($map['sceneList'])) {
                $model->sceneList = [];
                $n1 = 0;
                foreach ($map['sceneList'] as $item1) {
                    $model->sceneList[$n1++] = sceneList::fromMap($item1);
                }
            }
        }

        if (isset($map['sentenceList'])) {
            if (!empty($map['sentenceList'])) {
                $model->sentenceList = [];
                $n1 = 0;
                foreach ($map['sentenceList'] as $item1) {
                    $model->sentenceList[$n1++] = sentenceList::fromMap($item1);
                }
            }
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['theme'])) {
            $model->theme = theme::fromMap($map['theme']);
        }

        if (isset($map['topic'])) {
            $model->topic = topic::fromMap($map['topic']);
        }

        if (isset($map['wordList'])) {
            if (!empty($map['wordList'])) {
                $model->wordList = [];
                $n1 = 0;
                foreach ($map['wordList'] as $item1) {
                    $model->wordList[$n1++] = wordList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
