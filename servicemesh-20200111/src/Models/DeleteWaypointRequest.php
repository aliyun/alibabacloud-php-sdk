<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DeleteWaypointRequest extends Model
{
    /**
     * @description The ID of the cluster on the data plane.
     *
     * @example ce3c25e247da24f3aab9b7edfae83****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Waypoint名称。
     *
     * @example bookinfo-reviews
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The Service Mesh (ASM) instance ID.
     *
     * @example cb8963379255149cb98c8686f274x****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'name'          => 'Name',
        'namespace'     => 'Namespace',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteWaypointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
