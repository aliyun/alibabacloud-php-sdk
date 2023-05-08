<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\endpoints;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\serviceMeshInfo;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec;
use AlibabaCloud\Tea\Model;

class serviceMesh extends Model
{
    /**
     * @description The specification of the ASM instance. Valid values:
     *
     * - `ultimate`: Ultimate Edition
     * @example standard
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description The list of clusters.
     *
     * @var string[]
     */
    public $clusters;

    /**
     * @description The endpoints of the ASM instance.
     *
     * @var endpoints
     */
    public $endpoints;

    /**
     * @description The ID of the Alibaba Cloud service instance for which the ASM instance is created.
     *
     * @example cc3e96f249d124eb38b72718ec5*****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The Alibaba Cloud service for which the ASM instance is created. Valid values:
     *
     * - An empty value indicates that the ASM instance is created by the user.
     * @example ackone
     *
     * @var string
     */
    public $ownerType;

    /**
     * @description The basic information about the ASM instance.
     *
     * @var serviceMeshInfo
     */
    public $serviceMeshInfo;

    /**
     * @description The specifications of the ASM instance.
     *
     * @var spec
     */
    public $spec;
    protected $_name = [
        'clusterSpec'     => 'ClusterSpec',
        'clusters'        => 'Clusters',
        'endpoints'       => 'Endpoints',
        'ownerId'         => 'OwnerId',
        'ownerType'       => 'OwnerType',
        'serviceMeshInfo' => 'ServiceMeshInfo',
        'spec'            => 'Spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterSpec) {
            $res['ClusterSpec'] = $this->clusterSpec;
        }
        if (null !== $this->clusters) {
            $res['Clusters'] = $this->clusters;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toMap() : null;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->serviceMeshInfo) {
            $res['ServiceMeshInfo'] = null !== $this->serviceMeshInfo ? $this->serviceMeshInfo->toMap() : null;
        }
        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceMesh
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterSpec'])) {
            $model->clusterSpec = $map['ClusterSpec'];
        }
        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = $map['Clusters'];
            }
        }
        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['ServiceMeshInfo'])) {
            $model->serviceMeshInfo = serviceMeshInfo::fromMap($map['ServiceMeshInfo']);
        }
        if (isset($map['Spec'])) {
            $model->spec = spec::fromMap($map['Spec']);
        }

        return $model;
    }
}
