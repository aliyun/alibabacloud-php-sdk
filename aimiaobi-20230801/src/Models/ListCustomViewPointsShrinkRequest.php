<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ListCustomViewPointsShrinkRequest extends Model
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
     * @example 观点
     *
     * @var string
     */
    public $attitude;

    /**
     * @example 观点
     *
     * @var string
     */
    public $attitudesShrink;

    /**
     * @example 461591f4880747f890702c1b90494d1a
     *
     * @var string
     */
    public $customViewPointId;

    /**
     * @example 7ece3d1212e04c9ca716ae2486228f3f
     *
     * @var string
     */
    public $customViewPointIdsShrink;

    /**
     * @example 52
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
     * @example 热榜主题
     *
     * @var string
     */
    public $topic;

    /**
     * @example 1d20ed14db0840efb1c7eaaf4d46352b
     *
     * @var string
     */
    public $topicId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'attitude' => 'Attitude',
        'attitudesShrink' => 'Attitudes',
        'customViewPointId' => 'CustomViewPointId',
        'customViewPointIdsShrink' => 'CustomViewPointIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'topic' => 'Topic',
        'topicId' => 'TopicId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListCustomViewPointsShrinkRequest
     */
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
