<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FaRui\V20240628\Models;

use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryRequest\filterCondition;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryRequest\pageParam;
use AlibabaCloud\SDK\FaRui\V20240628\Models\RunSearchLawQueryRequest\thread;
use AlibabaCloud\Tea\Model;

class RunSearchLawQueryRequest extends Model
{
    /**
     * @example farui
     *
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
     * @description This parameter is required.
     *
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
        'appId'           => 'appId',
        'filterCondition' => 'filterCondition',
        'pageParam'       => 'pageParam',
        'query'           => 'query',
        'queryKeywords'   => 'queryKeywords',
        'thread'          => 'thread',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->filterCondition) {
            $res['filterCondition'] = null !== $this->filterCondition ? $this->filterCondition->toMap() : null;
        }
        if (null !== $this->pageParam) {
            $res['pageParam'] = null !== $this->pageParam ? $this->pageParam->toMap() : null;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->queryKeywords) {
            $res['queryKeywords'] = $this->queryKeywords;
        }
        if (null !== $this->thread) {
            $res['thread'] = null !== $this->thread ? $this->thread->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunSearchLawQueryRequest
     */
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
                $model->queryKeywords = $map['queryKeywords'];
            }
        }
        if (isset($map['thread'])) {
            $model->thread = thread::fromMap($map['thread']);
        }

        return $model;
    }
}
