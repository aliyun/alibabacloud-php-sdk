<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeExecutionPlanResponseBody\clusterInfo\ecsOrders;

use AlibabaCloud\Tea\Model;

class ecsOrderInfo extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $diskCount;
    protected $_name = [
        'index'        => 'Index',
        'diskCapacity' => 'DiskCapacity',
        'nodeType'     => 'NodeType',
        'nodeCount'    => 'NodeCount',
        'diskType'     => 'DiskType',
        'instanceType' => 'InstanceType',
        'diskCount'    => 'DiskCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->diskCapacity) {
            $res['DiskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->diskCount) {
            $res['DiskCount'] = $this->diskCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsOrderInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['DiskCapacity'])) {
            $model->diskCapacity = $map['DiskCapacity'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['DiskCount'])) {
            $model->diskCount = $map['DiskCount'];
        }

        return $model;
    }
}
