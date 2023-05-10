<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesResponseBody\resources;

use AlibabaCloud\Tea\Model;

class moduleInfo extends Model
{
    /**
     * @example moduleA/moduleB
     *
     * @var string
     */
    public $logicalIdHierarchy;

    /**
     * @example MODULE::ROS::Parent::Example/MODULE::ROS::Child::Example
     *
     * @var string
     */
    public $typeHierarchy;
    protected $_name = [
        'logicalIdHierarchy' => 'LogicalIdHierarchy',
        'typeHierarchy'      => 'TypeHierarchy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicalIdHierarchy) {
            $res['LogicalIdHierarchy'] = $this->logicalIdHierarchy;
        }
        if (null !== $this->typeHierarchy) {
            $res['TypeHierarchy'] = $this->typeHierarchy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicalIdHierarchy'])) {
            $model->logicalIdHierarchy = $map['LogicalIdHierarchy'];
        }
        if (isset($map['TypeHierarchy'])) {
            $model->typeHierarchy = $map['TypeHierarchy'];
        }

        return $model;
    }
}
