<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DeleteClusterRequest;

use AlibabaCloud\Tea\Model;

class deleteOptions extends Model
{
    /**
     * @description The deletion policy for the specified type of resource. Valid values:
     *
     *   delete: deletes the specified type of resource.
     *   retain: retains the specified type of resource.
     *
     * @example delete
     *
     * @var string
     */
    public $deleteMode;

    /**
     * @description Valid values:
     *
     *   SLB: SLB resources created for Services. By default, the SLB resources are automatically deleted.
     *   ALB: Application Load Balancer (ALB) resources created by the ALB Ingress controller. By default, the ALB resources are retained.
     *   SLS_Data: Simple Log Service projects used by the cluster logging feature. By default, the Simple Log Service projects are retained.
     *   SLS_ControlPlane: Simple Log Service projects used to store the logs of control planes in ACK managed clusters. By default, the Simple Log Service projects are retained.
     *   PrivateZone: PrivateZone resources created by ACK Serverless clusters. By default, the PrivateZone resources are retained.
     *
     * @example SLS_Data
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'deleteMode'   => 'delete_mode',
        'resourceType' => 'resource_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteMode) {
            $res['delete_mode'] = $this->deleteMode;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deleteOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['delete_mode'])) {
            $model->deleteMode = $map['delete_mode'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }

        return $model;
    }
}
