<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\CreateMyBaseRequest;

use AlibabaCloud\Tea\Model;

class ECSClassList extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var int
     */
    public $sysDiskCapacity;

    /**
     * @var string
     */
    public $sysDiskType;
    protected $_name = [
        'instanceType'    => 'instanceType',
        'nodeCount'       => 'nodeCount',
        'sysDiskCapacity' => 'sysDiskCapacity',
        'sysDiskType'     => 'sysDiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->nodeCount) {
            $res['nodeCount'] = $this->nodeCount;
        }
        if (null !== $this->sysDiskCapacity) {
            $res['sysDiskCapacity'] = $this->sysDiskCapacity;
        }
        if (null !== $this->sysDiskType) {
            $res['sysDiskType'] = $this->sysDiskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ECSClassList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['nodeCount'])) {
            $model->nodeCount = $map['nodeCount'];
        }
        if (isset($map['sysDiskCapacity'])) {
            $model->sysDiskCapacity = $map['sysDiskCapacity'];
        }
        if (isset($map['sysDiskType'])) {
            $model->sysDiskType = $map['sysDiskType'];
        }

        return $model;
    }
}
