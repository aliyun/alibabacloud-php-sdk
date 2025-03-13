<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ListCustomViewPointsRequest extends Model
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
     * @var string[]
     */
    public $attitudes;

    /**
     * @example 461591f4880747f890702c1b90494d1a
     *
     * @var string
     */
    public $customViewPointId;

    /**
     * @example 7ece3d1212e04c9ca716ae2486228f3f
     *
     * @var string[]
     */
    public $customViewPointIds;

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
        'attitudes' => 'Attitudes',
        'customViewPointId' => 'CustomViewPointId',
        'customViewPointIds' => 'CustomViewPointIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'topic' => 'Topic',
        'topicId' => 'TopicId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->attitude) {
            $res['Attitude'] = $this->attitude;
        }
        if (null !== $this->attitudes) {
            $res['Attitudes'] = $this->attitudes;
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
     * @return ListCustomViewPointsRequest
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
            if (!empty($map['Attitudes'])) {
                $model->attitudes = $map['Attitudes'];
            }
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
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
