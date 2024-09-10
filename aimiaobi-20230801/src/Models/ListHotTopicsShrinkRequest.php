<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ListHotTopicsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 下一页的token
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $topicIdsShrink;

    /**
     * @example 根据热榜主题全文检索
     *
     * @var string
     */
    public $topicQuery;

    /**
     * @example 热榜源筛选，支持的热榜源。热榜源详见API：ListHotSources
     *
     * @var string
     */
    public $topicSource;

    /**
     * @example 数据版本筛选
     *
     * @var string
     */
    public $topicVersion;

    /**
     * @var string
     */
    public $topicsShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $withNews;
    protected $_name = [
        'agentKey'       => 'AgentKey',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'topicIdsShrink' => 'TopicIds',
        'topicQuery'     => 'TopicQuery',
        'topicSource'    => 'TopicSource',
        'topicVersion'   => 'TopicVersion',
        'topicsShrink'   => 'Topics',
        'withNews'       => 'WithNews',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->topicIdsShrink) {
            $res['TopicIds'] = $this->topicIdsShrink;
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
        if (null !== $this->topicsShrink) {
            $res['Topics'] = $this->topicsShrink;
        }
        if (null !== $this->withNews) {
            $res['WithNews'] = $this->withNews;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHotTopicsShrinkRequest
     */
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
            $model->topicIdsShrink = $map['TopicIds'];
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
            $model->topicsShrink = $map['Topics'];
        }
        if (isset($map['WithNews'])) {
            $model->withNews = $map['WithNews'];
        }

        return $model;
    }
}
