<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListCustomViewPointsShrinkRequest extends Model
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
     * @var string
     */
    public $attitudesShrink;
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
    public $topic;
    /**
     * @var string
     */
    public $topicId;
    protected $_name = [
        'agentKey'                 => 'AgentKey',
        'attitude'                 => 'Attitude',
        'attitudesShrink'          => 'Attitudes',
        'customViewPointId'        => 'CustomViewPointId',
        'customViewPointIdsShrink' => 'CustomViewPointIds',
        'maxResults'               => 'MaxResults',
        'nextToken'                => 'NextToken',
        'topic'                    => 'Topic',
        'topicId'                  => 'TopicId',
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

        if (null !== $this->attitude) {
            $res['Attitude'] = $this->attitude;
        }

        if (null !== $this->attitudesShrink) {
            $res['Attitudes'] = $this->attitudesShrink;
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
            $model->attitudesShrink = $map['Attitudes'];
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

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
