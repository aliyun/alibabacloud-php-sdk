<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponseBody\DBInstances;

use AlibabaCloud\Tea\Model;

class mongosList extends Model
{
    /**
     * @description The type of the mongos node.
     *
     * @example dds.mongos.standard
     *
     * @var string
     */
    public $nodeClass;

    /**
     * @description The description of the mongos node.
     *
     * @var string
     */
    public $nodeDescription;

    /**
     * @description The ID of the mongos node.
     *
     * @example s-bp10e3b0d02f****
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'nodeClass'       => 'NodeClass',
        'nodeDescription' => 'NodeDescription',
        'nodeId'          => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeClass) {
            $res['NodeClass'] = $this->nodeClass;
        }
        if (null !== $this->nodeDescription) {
            $res['NodeDescription'] = $this->nodeDescription;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mongosList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }
        if (isset($map['NodeDescription'])) {
            $model->nodeDescription = $map['NodeDescription'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
