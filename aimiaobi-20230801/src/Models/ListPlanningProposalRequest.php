<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ListPlanningProposalRequest extends Model
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
     * @example e7b26a9e1211444db8f0a984361a5e0f
     *
     * @var string
     */
    public $customViewPointId;

    /**
     * @example 27971fc8f3ce4ed58c7e7fc4b503e432
     *
     * @var string[]
     */
    public $customViewPointIds;

    /**
     * @example 73
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
     * @example 标题
     *
     * @var string[]
     */
    public $titles;

    /**
     * @description This parameter is required.
     *
     * @example 热榜主题
     *
     * @var string
     */
    public $topic;

    /**
     * @description This parameter is required.
     *
     * @example 热榜源
     *
     * @var string
     */
    public $topicSource;

    /**
     * @example 2024-09-10_08
     *
     * @var string
     */
    public $topicVersion;

    /**
     * @description This parameter is required.
     *
     * @example CustomViewPoints
     *
     * @var string
     */
    public $viewPointType;
    protected $_name = [
        'agentKey'           => 'AgentKey',
        'customViewPointId'  => 'CustomViewPointId',
        'customViewPointIds' => 'CustomViewPointIds',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'titles'             => 'Titles',
        'topic'              => 'Topic',
        'topicSource'        => 'TopicSource',
        'topicVersion'       => 'TopicVersion',
        'viewPointType'      => 'ViewPointType',
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
        if (null !== $this->customViewPointId) {
            $res['CustomViewPointId'] = $this->customViewPointId;
        }
        if (null !== $this->customViewPointIds) {
            $res['CustomViewPointIds'] = $this->customViewPointIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->titles) {
            $res['Titles'] = $this->titles;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->topicSource) {
            $res['TopicSource'] = $this->topicSource;
        }
        if (null !== $this->topicVersion) {
            $res['TopicVersion'] = $this->topicVersion;
        }
        if (null !== $this->viewPointType) {
            $res['ViewPointType'] = $this->viewPointType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPlanningProposalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['CustomViewPointId'])) {
            $model->customViewPointId = $map['CustomViewPointId'];
        }
        if (isset($map['CustomViewPointIds'])) {
            if (!empty($map['CustomViewPointIds'])) {
                $model->customViewPointIds = $map['CustomViewPointIds'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Titles'])) {
            if (!empty($map['Titles'])) {
                $model->titles = $map['Titles'];
            }
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['TopicSource'])) {
            $model->topicSource = $map['TopicSource'];
        }
        if (isset($map['TopicVersion'])) {
            $model->topicVersion = $map['TopicVersion'];
        }
        if (isset($map['ViewPointType'])) {
            $model->viewPointType = $map['ViewPointType'];
        }

        return $model;
    }
}
