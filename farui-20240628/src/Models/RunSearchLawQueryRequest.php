<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryRequest\filterCondition;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryRequest\pageParam;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryRequest\thread;

class RunSearchLawQueryRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var filterCondition
     */
    public $filterCondition;

    /**
     * @var pageParam
     */
    public $pageParam;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string[]
     */
    public $queryKeywords;

    /**
     * @var thread
     */
    public $thread;
    protected $_name = [
        'appId' => 'appId',
        'filterCondition' => 'filterCondition',
        'pageParam' => 'pageParam',
        'query' => 'query',
        'queryKeywords' => 'queryKeywords',
        'thread' => 'thread',
    ];

    public function validate()
    {
        if (null !== $this->filterCondition) {
            $this->filterCondition->validate();
        }
        if (null !== $this->pageParam) {
            $this->pageParam->validate();
        }
        if (\is_array($this->queryKeywords)) {
            Model::validateArray($this->queryKeywords);
        }
        if (null !== $this->thread) {
            $this->thread->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->filterCondition) {
            $res['filterCondition'] = null !== $this->filterCondition ? $this->filterCondition->toArray($noStream) : $this->filterCondition;
        }

        if (null !== $this->pageParam) {
            $res['pageParam'] = null !== $this->pageParam ? $this->pageParam->toArray($noStream) : $this->pageParam;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->queryKeywords) {
            if (\is_array($this->queryKeywords)) {
                $res['queryKeywords'] = [];
                $n1 = 0;
                foreach ($this->queryKeywords as $item1) {
                    $res['queryKeywords'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->thread) {
            $res['thread'] = null !== $this->thread ? $this->thread->toArray($noStream) : $this->thread;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['filterCondition'])) {
            $model->filterCondition = filterCondition::fromMap($map['filterCondition']);
        }

        if (isset($map['pageParam'])) {
            $model->pageParam = pageParam::fromMap($map['pageParam']);
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['queryKeywords'])) {
            if (!empty($map['queryKeywords'])) {
                $model->queryKeywords = [];
                $n1 = 0;
                foreach ($map['queryKeywords'] as $item1) {
                    $model->queryKeywords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['thread'])) {
            $model->thread = thread::fromMap($map['thread']);
        }

        return $model;
    }
}
