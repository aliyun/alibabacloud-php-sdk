<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCustomHotTopicAnalysisResponseBody\payload;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCustomHotTopicAnalysisResponseBody\payload\output\articles;
use AlibabaCloud\Tea\Model;

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
     * @example 异步任务ID
     *
     * @var string
     */
    public $asyncTaskId;

    /**
     * @example 自定义选题视角
     *
     * @var string
     */
    public $attitude;

    /**
     * @example 大模型改变世界
     *
     * @var string
     */
    public $searchQuery;

    /**
     * @example 文本生成结果
     *
     * @var string
     */
    public $text;

    /**
     * @example 话题ID
     *
     * @var string
     */
    public $topicId;
    protected $_name = [
        'articles'    => 'Articles',
        'askUser'     => 'AskUser',
        'asyncTaskId' => 'AsyncTaskId',
        'attitude'    => 'Attitude',
        'searchQuery' => 'SearchQuery',
        'text'        => 'Text',
        'topicId'     => 'TopicId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->articles) {
            $res['Articles'] = [];
            if (null !== $this->articles && \is_array($this->articles)) {
                $n = 0;
                foreach ($this->articles as $item) {
                    $res['Articles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->askUser) {
            $res['AskUser'] = $this->askUser;
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

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Articles'])) {
            if (!empty($map['Articles'])) {
                $model->articles = [];
                $n               = 0;
                foreach ($map['Articles'] as $item) {
                    $model->articles[$n++] = null !== $item ? articles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AskUser'])) {
            if (!empty($map['AskUser'])) {
                $model->askUser = $map['AskUser'];
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
