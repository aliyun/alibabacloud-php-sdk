<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint\nodeItems;

use AlibabaCloud\Tea\Model;

class nodeItem extends Model
{
    /**
     * @description The instance ID.
     *
     * @example rm-u****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The node ID.
     *
     * @example rn-****13p6tum4289h
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The weight of the node. Read requests are distributed based on the weight.
     *
     * Valid values: 0 to 100.
     * @example 50
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'nodeId'       => 'NodeId',
        'weight'       => 'Weight',
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
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
