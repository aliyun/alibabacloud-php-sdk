<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterNodesRequest extends Model
{
    /**
     * @description The IDs of the nodes that you want to query. Separate multiple node IDs with commas (,).
     *
     * @example "i-bp11xjhwkj8k966u****,i-bp1dmhc2bu5igkyq****"
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The node pool ID.
     *
     * @example np****
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description The page number.
     *
     * Default value: 1.
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * Default value: 10.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The node state that you want to use to filter nodes. Valid values:
     *
     *   `all`: query nodes in the following four states.
     *   `running`: query nodes in the running state.
     *   `removing`: query nodes that are being removed.
     *   `initial`: query nodes that are being initialized.
     *   `failed`: query nodes that fail to be created.
     *
     * Default value: `all`.
     * @example running
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'instanceIds' => 'instanceIds',
        'nodepoolId'  => 'nodepool_id',
        'pageNumber'  => 'pageNumber',
        'pageSize'    => 'pageSize',
        'state'       => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['instanceIds'] = $this->instanceIds;
        }
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceIds'])) {
            $model->instanceIds = $map['instanceIds'];
        }
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
