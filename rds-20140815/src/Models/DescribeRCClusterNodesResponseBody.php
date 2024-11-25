<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCClusterNodesResponseBody\nodes;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCClusterNodesResponseBody\page;
use AlibabaCloud\Tea\Model;

class DescribeRCClusterNodesResponseBody extends Model
{
    /**
     * @description The details of the nodes.
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description The pagination information.
     *
     * @var page
     */
    public $page;

    /**
     * @description The request ID.
     *
     * @example 16C62438-491B-5C02-9B49-BA924A1372A2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nodes'     => 'Nodes',
        'page'      => 'Page',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->page) {
            $res['Page'] = null !== $this->page ? $this->page->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRCClusterNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n            = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Page'])) {
            $model->page = page::fromMap($map['Page']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
