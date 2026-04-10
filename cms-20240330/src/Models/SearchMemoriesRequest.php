<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class SearchMemoriesRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var mixed[]
     */
    public $filters;

    /**
     * @var string
     */
    public $query;

    /**
     * @var bool
     */
    public $rerank;

    /**
     * @var string
     */
    public $retrieveLevel;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'agentId' => 'agentId',
        'appId' => 'appId',
        'filters' => 'filters',
        'query' => 'query',
        'rerank' => 'rerank',
        'retrieveLevel' => 'retrieveLevel',
        'runId' => 'runId',
        'threshold' => 'threshold',
        'topK' => 'topK',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['filters'] = [];
                foreach ($this->filters as $key1 => $value1) {
                    $res['filters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->rerank) {
            $res['rerank'] = $this->rerank;
        }

        if (null !== $this->retrieveLevel) {
            $res['retrieveLevel'] = $this->retrieveLevel;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
        }

        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['filters'])) {
            if (!empty($map['filters'])) {
                $model->filters = [];
                foreach ($map['filters'] as $key1 => $value1) {
                    $model->filters[$key1] = $value1;
                }
            }
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['rerank'])) {
            $model->rerank = $map['rerank'];
        }

        if (isset($map['retrieveLevel'])) {
            $model->retrieveLevel = $map['retrieveLevel'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
