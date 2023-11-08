<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateSwimLaneGroupRequest extends Model
{
    /**
     * @var string
     */
    public $fallbackTarget;

    /**
     * @description The name of the lane group.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The Service Mesh (ASM) instance ID.
     *
     * @example xxx
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description A list of services associated with the lane group.
     *
     * @example ["sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mocka","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockb","sh01/c089443ea9e50403fa4f0a6237d11e0a9/default/mockc"]
     *
     * @var string
     */
    public $servicesList;
    protected $_name = [
        'fallbackTarget' => 'FallbackTarget',
        'groupName'      => 'GroupName',
        'serviceMeshId'  => 'ServiceMeshId',
        'servicesList'   => 'ServicesList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fallbackTarget) {
            $res['FallbackTarget'] = $this->fallbackTarget;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->servicesList) {
            $res['ServicesList'] = $this->servicesList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSwimLaneGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FallbackTarget'])) {
            $model->fallbackTarget = $map['FallbackTarget'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['ServicesList'])) {
            $model->servicesList = $map['ServicesList'];
        }

        return $model;
    }
}
