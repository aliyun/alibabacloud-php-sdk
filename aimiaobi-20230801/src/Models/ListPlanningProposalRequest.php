<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListPlanningProposalRequest extends Model
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
     * @var string[]
     */
    public $customViewPointIds;
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
    public $titles;
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
        if (\is_array($this->customViewPointIds)) {
            Model::validateArray($this->customViewPointIds);
        }
        if (\is_array($this->titles)) {
            Model::validateArray($this->titles);
        }
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

        if (null !== $this->customViewPointIds) {
            if (\is_array($this->customViewPointIds)) {
                $res['CustomViewPointIds'] = [];
                $n1                        = 0;
                foreach ($this->customViewPointIds as $item1) {
                    $res['CustomViewPointIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->titles) {
            if (\is_array($this->titles)) {
                $res['Titles'] = [];
                $n1            = 0;
                foreach ($this->titles as $item1) {
                    $res['Titles'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['CustomViewPointIds'])) {
                $model->customViewPointIds = [];
                $n1                        = 0;
                foreach ($map['CustomViewPointIds'] as $item1) {
                    $model->customViewPointIds[$n1++] = $item1;
                }
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
                $model->titles = [];
                $n1            = 0;
                foreach ($map['Titles'] as $item1) {
                    $model->titles[$n1++] = $item1;
                }
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
