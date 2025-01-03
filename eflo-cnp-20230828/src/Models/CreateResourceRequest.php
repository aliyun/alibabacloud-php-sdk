<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateResourceRequest\machineTypes;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateResourceRequest\userAccessParam;
use AlibabaCloud\Tea\Model;

class CreateResourceRequest extends Model
{
    /**
     * @description Cluster Description
     *
     * @example ppu集群
     *
     * @var string
     */
    public $clusterDesc;

    /**
     * @description Cluster ID
     *
     * @example ehpc-sh-fj71c0ycfw
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Cluster Name
     *
     * @example tre-1-ppu
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Cluster Type
     *
     * @example ACK
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description Machine Types
     *
     * @var machineTypes
     */
    public $machineTypes;

    /**
     * @description Resource Type
     *
     * @example ACK
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description User Access Parameters
     *
     * @var userAccessParam
     */
    public $userAccessParam;
    protected $_name = [
        'clusterDesc'     => 'ClusterDesc',
        'clusterId'       => 'ClusterId',
        'clusterName'     => 'ClusterName',
        'clusterType'     => 'ClusterType',
        'machineTypes'    => 'MachineTypes',
        'resourceType'    => 'ResourceType',
        'userAccessParam' => 'UserAccessParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterDesc) {
            $res['ClusterDesc'] = $this->clusterDesc;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = null !== $this->machineTypes ? $this->machineTypes->toMap() : null;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->userAccessParam) {
            $res['UserAccessParam'] = null !== $this->userAccessParam ? $this->userAccessParam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterDesc'])) {
            $model->clusterDesc = $map['ClusterDesc'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['MachineTypes'])) {
            $model->machineTypes = machineTypes::fromMap($map['MachineTypes']);
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['UserAccessParam'])) {
            $model->userAccessParam = userAccessParam::fromMap($map['UserAccessParam']);
        }

        return $model;
    }
}
