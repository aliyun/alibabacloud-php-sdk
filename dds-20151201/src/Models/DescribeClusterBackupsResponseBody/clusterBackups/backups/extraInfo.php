<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsResponseBody\clusterBackups\backups;

use AlibabaCloud\Tea\Model;

class extraInfo extends Model
{
    /**
     * @description The instance type of the node.
     *
     * @example mdb.shard.4x.large.d
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description The node ID.
     *
     * @example d-2ze75ab1fa5d****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The node type.
     *
     * @example db
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The storage capacity of the node. Unit: MB.
     *
     * @example 20480
     *
     * @var string
     */
    public $storageSize;
    protected $_name = [
        'instanceClass' => 'InstanceClass',
        'nodeId'        => 'NodeId',
        'nodeType'      => 'NodeType',
        'storageSize'   => 'StorageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
