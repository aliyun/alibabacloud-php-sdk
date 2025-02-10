<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesResponseBody\DBInstances\DBInstance\mongosList;

use AlibabaCloud\Dara\Model;

class mongosAttribute extends Model
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
    protected $_name = [
        'nodeClass'       => 'NodeClass',
        'nodeDescription' => 'NodeDescription',
        'nodeId'          => 'NodeId',
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

        return $model;
    }
}
