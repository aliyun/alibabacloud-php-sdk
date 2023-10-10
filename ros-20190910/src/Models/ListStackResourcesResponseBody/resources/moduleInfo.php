<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackResourcesResponseBody\resources;

use AlibabaCloud\Tea\Model;

class moduleInfo extends Model
{
    /**
     * @description The concatenated logical IDs of one or more modules that contain the resource. The modules are listed from the outermost layer and separated by forward slashes (`/`).
     *
     * `moduleA/moduleB`
     * @example moduleA/moduleB
     *
     * @var string
     */
    public $logicalIdHierarchy;

    /**
     * @description The concatenated types of one or more modules that contain the resource. The module types are listed from the outermost layer and separated by forward slashes (`/`).
     *
     * `MODULE::ROS::Parent::Example/MODULE::ROS::Child::Example`
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
