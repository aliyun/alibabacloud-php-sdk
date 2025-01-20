<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SearchNewsRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;
    /**
     * @var bool
     */
    public $filterNotNull;
    /**
     * @var bool
     */
    public $includeContent;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $pageSize;
    /**
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
        if (\is_array($this->searchSources)) {
            Model::validateArray($this->searchSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->searchSources)) {
                $res['SearchSources'] = [];
                $n1                   = 0;
                foreach ($this->searchSources as $item1) {
                    $res['SearchSources'][$n1++] = $item1;
                }
            }
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
                $model->searchSources = [];
                $n1                   = 0;
                foreach ($map['SearchSources'] as $item1) {
                    $model->searchSources[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
