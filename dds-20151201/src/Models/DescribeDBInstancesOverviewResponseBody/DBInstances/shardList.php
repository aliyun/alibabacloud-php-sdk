<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponseBody\DBInstances;

use AlibabaCloud\Dara\Model;

class shardList extends Model
{
    /**
     * @var string
     */
    public $nodeClass;
    /**
     * @var string
     */
    public $nodeDescription;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var int
     */
    public $nodeStorage;
    /**
     * @var int
     */
    public $readonlyReplicas;
    protected $_name = [
        'nodeClass'        => 'NodeClass',
        'nodeDescription'  => 'NodeDescription',
        'nodeId'           => 'NodeId',
        'nodeStorage'      => 'NodeStorage',
        'readonlyReplicas' => 'ReadonlyReplicas',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->nodeStorage) {
            $res['NodeStorage'] = $this->nodeStorage;
        }

        if (null !== $this->readonlyReplicas) {
            $res['ReadonlyReplicas'] = $this->readonlyReplicas;
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
        if (isset($map['NodeClass'])) {
            $model->nodeClass = $map['NodeClass'];
        }

        if (isset($map['NodeDescription'])) {
            $model->nodeDescription = $map['NodeDescription'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeStorage'])) {
            $model->nodeStorage = $map['NodeStorage'];
        }

        if (isset($map['ReadonlyReplicas'])) {
            $model->readonlyReplicas = $map['ReadonlyReplicas'];
        }

        return $model;
    }
}
