<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListCustomViewPointsRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $attitude;

    /**
     * @var string[]
     */
    public $attitudes;

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
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $topicId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'attitude' => 'Attitude',
        'attitudes' => 'Attitudes',
        'customViewPointId' => 'CustomViewPointId',
        'customViewPointIds' => 'CustomViewPointIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'topic' => 'Topic',
        'topicId' => 'TopicId',
    ];

    public function validate()
    {
        if (\is_array($this->attitudes)) {
            Model::validateArray($this->attitudes);
        }
        if (\is_array($this->customViewPointIds)) {
            Model::validateArray($this->customViewPointIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->attitude) {
            $res['Attitude'] = $this->attitude;
        }

        if (null !== $this->attitudes) {
            if (\is_array($this->attitudes)) {
                $res['Attitudes'] = [];
                $n1 = 0;
                foreach ($this->attitudes as $item1) {
                    $res['Attitudes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->customViewPointId) {
            $res['CustomViewPointId'] = $this->customViewPointId;
        }

        if (null !== $this->customViewPointIds) {
            if (\is_array($this->customViewPointIds)) {
                $res['CustomViewPointIds'] = [];
                $n1 = 0;
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

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['Attitude'])) {
            $model->attitude = $map['Attitude'];
        }

        if (isset($map['Attitudes'])) {
            if (!empty($map['Attitudes'])) {
                $model->attitudes = [];
                $n1 = 0;
                foreach ($map['Attitudes'] as $item1) {
                    $model->attitudes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CustomViewPointId'])) {
            $model->customViewPointId = $map['CustomViewPointId'];
        }

        if (isset($map['CustomViewPointIds'])) {
            if (!empty($map['CustomViewPointIds'])) {
                $model->customViewPointIds = [];
                $n1 = 0;
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

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
