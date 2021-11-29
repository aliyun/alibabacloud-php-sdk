<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ModifyExecutionPlanRequest;

use AlibabaCloud\Tea\Model;

class ecsOrder extends Model
{
    /**
     * @var int
     */
    public $diskCapacity;

    /**
     * @var int
     */
    public $diskCount;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'diskCapacity' => 'DiskCapacity',
        'diskCount'    => 'DiskCount',
        'diskType'     => 'DiskType',
        'index'        => 'Index',
        'instanceType' => 'InstanceType',
        'nodeCount'    => 'NodeCount',
        'nodeType'     => 'NodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskCapacity) {
            $res['DiskCapacity'] = $this->diskCapacity;
        }
        if (null !== $this->diskCount) {
            $res['DiskCount'] = $this->diskCount;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskCapacity'])) {
            $model->diskCapacity = $map['DiskCapacity'];
        }
        if (isset($map['DiskCount'])) {
            $model->diskCount = $map['DiskCount'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
