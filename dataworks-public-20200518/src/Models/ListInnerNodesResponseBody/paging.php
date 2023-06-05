<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInnerNodesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInnerNodesResponseBody\paging\nodes;
use AlibabaCloud\Tea\Model;

class paging extends Model
{
    /**
     * @description The scheduling type of the inner node. Valid values:
     *
     *   NORMAL: The inner node is an auto triggered node.
     *   MANUAL: The inner node is a manually triggered node. Manually triggered nodes cannot be automatically triggered.
     *   PAUSE: The inner node is a paused node.
     *   SKIP: The inner node is a dry-run node. Dry-run nodes are started as scheduled but the scheduling system sets the status of the nodes to succeeded when the scheduling system starts to run the nodes.
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description The number of entries returned per page. Default value: 10. Maximum value: 100.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The total number of inner nodes returned.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The list of inner nodes.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nodes'      => 'Nodes',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paging
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
