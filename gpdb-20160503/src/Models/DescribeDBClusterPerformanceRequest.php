<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBClusterPerformanceRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $nodes;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'endTime' => 'EndTime',
        'key' => 'Key',
        'nodeType' => 'NodeType',
        'nodes' => 'Nodes',
        'resourceGroupName' => 'ResourceGroupName',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
