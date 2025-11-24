<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\endpoints;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\serviceMeshInfo;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\spec;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponseBody\serviceMeshes\tag;

class serviceMeshes extends Model
{
    /**
     * @var string
     */
    public $clusterSpec;

    /**
     * @var string[]
     */
    public $clusters;

    /**
     * @var endpoints
     */
    public $endpoints;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var serviceMeshInfo
     */
    public $serviceMeshInfo;

    /**
     * @var spec
     */
    public $spec;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var bool
     */
    public $upgradable;
    protected $_name = [
        'clusterSpec' => 'ClusterSpec',
        'clusters' => 'Clusters',
        'endpoints' => 'Endpoints',
        'ownerId' => 'OwnerId',
        'ownerType' => 'OwnerType',
        'serviceMeshInfo' => 'ServiceMeshInfo',
        'spec' => 'Spec',
        'tag' => 'Tag',
        'upgradable' => 'Upgradable',
    ];

    public function validate()
    {
        if (\is_array($this->clusters)) {
            Model::validateArray($this->clusters);
        }
        if (null !== $this->endpoints) {
            $this->endpoints->validate();
        }
        if (null !== $this->serviceMeshInfo) {
            $this->serviceMeshInfo->validate();
        }
        if (null !== $this->spec) {
            $this->spec->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterSpec) {
            $res['ClusterSpec'] = $this->clusterSpec;
        }

        if (null !== $this->clusters) {
            if (\is_array($this->clusters)) {
                $res['Clusters'] = [];
                $n1 = 0;
                foreach ($this->clusters as $item1) {
                    $res['Clusters'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toArray($noStream) : $this->endpoints;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }

        if (null !== $this->serviceMeshInfo) {
            $res['ServiceMeshInfo'] = null !== $this->serviceMeshInfo ? $this->serviceMeshInfo->toArray($noStream) : $this->serviceMeshInfo;
        }

        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toArray($noStream) : $this->spec;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->upgradable) {
            $res['Upgradable'] = $this->upgradable;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterSpec'])) {
            $model->clusterSpec = $map['ClusterSpec'];
        }

        if (isset($map['Clusters'])) {
            if (!empty($map['Clusters'])) {
                $model->clusters = [];
                $n1 = 0;
                foreach ($map['Clusters'] as $item1) {
                    $model->clusters[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Upgradable'])) {
            $model->upgradable = $map['Upgradable'];
        }

        return $model;
    }
}
