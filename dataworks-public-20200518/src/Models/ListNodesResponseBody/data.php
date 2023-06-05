<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListNodesResponseBody\data\nodes;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The scheduling type of the node. Valid values:
     *
     *   NORMAL: indicates that the node is a normal auto triggered node.
     *   MANUAL: indicates that the node is a manually triggered node.
     *   PAUSE: indicates that the node is a paused node.
     *   SKIP: indicates that the node is a dry-run node. Dry-run nodes are started as scheduled but the system sets the status of the nodes to successful when it starts to run them.
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description The name of the node.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The cron expression returned.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the workflow.
     *
     * @example 66
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
     * @return data
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
