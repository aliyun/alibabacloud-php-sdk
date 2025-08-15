<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListPlanningProposalShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $customViewPointId;

    /**
     * @var string
     */
    public $customViewPointIdsShrink;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $titlesShrink;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $topicSource;

    /**
     * @var string
     */
    public $topicVersion;

    /**
     * @var string
     */
    public $viewPointType;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'customViewPointId' => 'CustomViewPointId',
        'customViewPointIdsShrink' => 'CustomViewPointIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'titlesShrink' => 'Titles',
        'topic' => 'Topic',
        'topicSource' => 'TopicSource',
        'topicVersion' => 'TopicVersion',
        'viewPointType' => 'ViewPointType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->customViewPointId) {
            $res['CustomViewPointId'] = $this->customViewPointId;
        }

        if (null !== $this->customViewPointIdsShrink) {
            $res['CustomViewPointIds'] = $this->customViewPointIdsShrink;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->titlesShrink) {
            $res['Titles'] = $this->titlesShrink;
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

        if (isset($map['CustomViewPointId'])) {
            $model->customViewPointId = $map['CustomViewPointId'];
        }

        if (isset($map['CustomViewPointIds'])) {
            $model->customViewPointIdsShrink = $map['CustomViewPointIds'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Titles'])) {
            $model->titlesShrink = $map['Titles'];
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
