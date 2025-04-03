<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListHotTopicsRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $topicIds;

    /**
     * @var string
     */
    public $topicQuery;

    /**
     * @var string
     */
    public $topicSource;

    /**
     * @var string
     */
    public $topicVersion;

    /**
     * @var string[]
     */
    public $topics;

    /**
     * @var bool
     */
    public $withNews;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'topicIds' => 'TopicIds',
        'topicQuery' => 'TopicQuery',
        'topicSource' => 'TopicSource',
        'topicVersion' => 'TopicVersion',
        'topics' => 'Topics',
        'withNews' => 'WithNews',
    ];

    public function validate()
    {
        if (\is_array($this->topicIds)) {
            Model::validateArray($this->topicIds);
        }
        if (\is_array($this->topics)) {
            Model::validateArray($this->topics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->topicIds) {
            if (\is_array($this->topicIds)) {
                $res['TopicIds'] = [];
                $n1 = 0;
                foreach ($this->topicIds as $item1) {
                    $res['TopicIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->topicQuery) {
            $res['TopicQuery'] = $this->topicQuery;
        }

        if (null !== $this->topicSource) {
            $res['TopicSource'] = $this->topicSource;
        }

        if (null !== $this->topicVersion) {
            $res['TopicVersion'] = $this->topicVersion;
        }

        if (null !== $this->topics) {
            if (\is_array($this->topics)) {
                $res['Topics'] = [];
                $n1 = 0;
                foreach ($this->topics as $item1) {
                    $res['Topics'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->withNews) {
            $res['WithNews'] = $this->withNews;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['TopicIds'])) {
            if (!empty($map['TopicIds'])) {
                $model->topicIds = [];
                $n1 = 0;
                foreach ($map['TopicIds'] as $item1) {
                    $model->topicIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TopicQuery'])) {
            $model->topicQuery = $map['TopicQuery'];
        }

        if (isset($map['TopicSource'])) {
            $model->topicSource = $map['TopicSource'];
        }

        if (isset($map['TopicVersion'])) {
            $model->topicVersion = $map['TopicVersion'];
        }

        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                $n1 = 0;
                foreach ($map['Topics'] as $item1) {
                    $model->topics[$n1++] = $item1;
                }
            }
        }

        if (isset($map['WithNews'])) {
            $model->withNews = $map['WithNews'];
        }

        return $model;
    }
}
