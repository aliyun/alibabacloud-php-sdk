<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\endpoints;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\serviceMeshInfo;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\tag;
use AlibabaCloud\Tea\Model;

class serviceMeshes extends Model
{
    /**
     * @description The edition of the ASM instance. Valid values:
     *
     *   `standard`: Standard Edition
     *   `enterprise`: Enterprise Edition
     *   `ultimate`: Ultimate Edition
     *
     * @example standard
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description The clusters.
     *
     * @var string[]
     */
    public $clusters;

    /**
     * @description The information about all endpoints of the ASM instances.
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
     *   `ackone`: The ASM instance is created for Alibaba Cloud Distributed Cloud Container Platform (ACK One).
     *   An empty value indicates that the ASM instance is created by the user.
     *
     * @example ackone
     *
     * @var string
     */
    public $ownerType;

    /**
     * @description The basic information about the ASM instances.
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

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example false
     *
     * @var bool
     */
    public $upgradable;
    protected $_name = [
        'clusterSpec'     => 'ClusterSpec',
        'clusters'        => 'Clusters',
        'endpoints'       => 'Endpoints',
        'ownerId'         => 'OwnerId',
        'ownerType'       => 'OwnerType',
        'serviceMeshInfo' => 'ServiceMeshInfo',
        'spec'            => 'Spec',
        'tag'             => 'Tag',
        'upgradable'      => 'Upgradable',
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->upgradable) {
            $res['Upgradable'] = $this->upgradable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceMeshes
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Upgradable'])) {
            $model->upgradable = $map['Upgradable'];
        }

        return $model;
    }
}
