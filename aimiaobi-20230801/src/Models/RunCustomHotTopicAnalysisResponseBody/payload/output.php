<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCustomHotTopicAnalysisResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCustomHotTopicAnalysisResponseBody\payload\output\articles;

class output extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @var string[]
     */
    public $askUser;

    /**
     * @var string
     */
    public $asyncTaskId;

    /**
     * @var string
     */
    public $attitude;

    /**
     * @var string
     */
    public $searchQuery;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $topicId;
    protected $_name = [
        'articles' => 'Articles',
        'askUser' => 'AskUser',
        'asyncTaskId' => 'AsyncTaskId',
        'attitude' => 'Attitude',
        'searchQuery' => 'SearchQuery',
        'text' => 'Text',
        'topicId' => 'TopicId',
    ];

    public function validate()
    {
        if (\is_array($this->articles)) {
            Model::validateArray($this->articles);
        }
        if (\is_array($this->askUser)) {
            Model::validateArray($this->askUser);
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

        if (null !== $this->askUser) {
            if (\is_array($this->askUser)) {
                $res['AskUser'] = [];
                $n1 = 0;
                foreach ($this->askUser as $item1) {
                    $res['AskUser'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->asyncTaskId) {
            $res['AsyncTaskId'] = $this->asyncTaskId;
        }

        if (null !== $this->attitude) {
            $res['Attitude'] = $this->attitude;
        }

        if (null !== $this->searchQuery) {
            $res['SearchQuery'] = $this->searchQuery;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
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

        if (isset($map['AskUser'])) {
            if (!empty($map['AskUser'])) {
                $model->askUser = [];
                $n1 = 0;
                foreach ($map['AskUser'] as $item1) {
                    $model->askUser[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AsyncTaskId'])) {
            $model->asyncTaskId = $map['AsyncTaskId'];
        }

        if (isset($map['Attitude'])) {
            $model->attitude = $map['Attitude'];
        }

        if (isset($map['SearchQuery'])) {
            $model->searchQuery = $map['SearchQuery'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
