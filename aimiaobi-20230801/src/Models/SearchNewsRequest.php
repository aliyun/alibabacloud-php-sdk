<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class SearchNewsRequest extends Model
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
     * @example false
     *
     * @var bool
     */
    public $filterNotNull;

    /**
     * @example false
     *
     * @var bool
     */
    public $includeContent;

    /**
     * @example 81
     *
     * @var int
     */
    public $page;

    /**
     * @example 35
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 检索Query
     *
     * @var string
     */
    public $query;

    /**
     * @var string[]
     */
    public $searchSources;
    protected $_name = [
        'agentKey'       => 'AgentKey',
        'filterNotNull'  => 'FilterNotNull',
        'includeContent' => 'IncludeContent',
        'page'           => 'Page',
        'pageSize'       => 'PageSize',
        'query'          => 'Query',
        'searchSources'  => 'SearchSources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->filterNotNull) {
            $res['FilterNotNull'] = $this->filterNotNull;
        }
        if (null !== $this->includeContent) {
            $res['IncludeContent'] = $this->includeContent;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->searchSources) {
            $res['SearchSources'] = $this->searchSources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchNewsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['FilterNotNull'])) {
            $model->filterNotNull = $map['FilterNotNull'];
        }
        if (isset($map['IncludeContent'])) {
            $model->includeContent = $map['IncludeContent'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['SearchSources'])) {
            if (!empty($map['SearchSources'])) {
                $model->searchSources = $map['SearchSources'];
            }
        }

        return $model;
    }
}
