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

class ListWebReviewPointsRequest extends Model
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
     * @example 81
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
    protected $_name = [
        'agentKey' => 'AgentKey',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'topic' => 'Topic',
        'topicSource' => 'TopicSource',
    ];

    public function validate(): void {}

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
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->topicSource) {
            $res['TopicSource'] = $this->topicSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWebReviewPointsRequest
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
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['TopicSource'])) {
            $model->topicSource = $map['TopicSource'];
        }

        return $model;
    }
}
