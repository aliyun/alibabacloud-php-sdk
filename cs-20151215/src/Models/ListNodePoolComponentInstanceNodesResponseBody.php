<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListNodePoolComponentInstanceNodesResponseBody\nodeList;

class ListNodePoolComponentInstanceNodesResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var nodeList[]
     */
    public $nodeList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'max_results',
        'nextToken' => 'next_token',
        'nodeList' => 'node_list',
        'totalCount' => 'total_count',
    ];

    public function validate()
    {
        if (\is_array($this->nodeList)) {
            Model::validateArray($this->nodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['max_results'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['next_token'] = $this->nextToken;
        }

        if (null !== $this->nodeList) {
            if (\is_array($this->nodeList)) {
                $res['node_list'] = [];
                $n1 = 0;
                foreach ($this->nodeList as $item1) {
                    $res['node_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['total_count'] = $this->totalCount;
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
        if (isset($map['max_results'])) {
            $model->maxResults = $map['max_results'];
        }

        if (isset($map['next_token'])) {
            $model->nextToken = $map['next_token'];
        }

        if (isset($map['node_list'])) {
            if (!empty($map['node_list'])) {
                $model->nodeList = [];
                $n1 = 0;
                foreach ($map['node_list'] as $item1) {
                    $model->nodeList[$n1] = nodeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['total_count'])) {
            $model->totalCount = $map['total_count'];
        }

        return $model;
    }
}
