<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterPerformanceRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the `YYYY-MM-DDTHH:mmZ` format.
     *
     * This parameter is required.
     * @example 2021-11-03T15:10Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The performance metric that you want to query. Separate multiple values with commas (,). For more information, see [Performance parameters](https://help.aliyun.com/document_detail/86943.html).
     *
     * This parameter is required.
     * @example adbpg_conn_count
     *
     * @var string
     */
    public $key;

    /**
     * @description The node type. Valid values:
     *
     *   **master**: coordinator node.
     *   **segment**: compute node.
     *
     * > If you do not specify this parameter, the performance metrics of all nodes are returned.
     * @example master
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The nodes for which you want to query performance metrics. Separate multiple values with commas (,). Example: `master-10******1,master-10******2`. You can call the [DescribeDBClusterNode](https://help.aliyun.com/document_detail/390136.html) operation to query the names of nodes.
     *
     * You can also filter the nodes based on their metric values. Valid values:
     *
     *   **top10**: the 10 nodes that have the highest metric values.
     *   **top20**: the 20 nodes that have the highest metric values.
     *   **bottom10**: the 10 nodes that have the lowest metric values.
     *   **bottom20**: the 20 nodes that have the lowest metric values.
     *
     * @example top10
     *
     * @var string
     */
    public $nodes;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the `YYYY-MM-DDTHH:mmZ` format.
     *
     * This parameter is required.
     * @example 2021-11-03T15:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBInstanceId'      => 'DBInstanceId',
        'endTime'           => 'EndTime',
        'key'               => 'Key',
        'nodeType'          => 'NodeType',
        'nodes'             => 'Nodes',
        'resourceGroupName' => 'ResourceGroupName',
        'startTime'         => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterPerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
