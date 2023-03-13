<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\components;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\nodeGroups;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterDescription;

    /**
     * @example Standard_Cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example Lite
     *
     * @var string
     */
    public $clusterType;

    /**
     * @var components[]
     */
    public $components;

    /**
     * @example False
     *
     * @var bool
     */
    public $ignoreFailedNodeTasks;

    /**
     * @var networks
     */
    public $networks;

    /**
     * @var nodeGroups[]
     */
    public $nodeGroups;

    /**
     * @example rg-aek2xdkc6icwfha
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clusterDescription'    => 'ClusterDescription',
        'clusterName'           => 'ClusterName',
        'clusterType'           => 'ClusterType',
        'components'            => 'Components',
        'ignoreFailedNodeTasks' => 'IgnoreFailedNodeTasks',
        'networks'              => 'Networks',
        'nodeGroups'            => 'NodeGroups',
        'resourceGroupId'       => 'ResourceGroupId',
        'tag'                   => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterDescription) {
            $res['ClusterDescription'] = $this->clusterDescription;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->components) {
            $res['Components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['Components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ignoreFailedNodeTasks) {
            $res['IgnoreFailedNodeTasks'] = $this->ignoreFailedNodeTasks;
        }
        if (null !== $this->networks) {
            $res['Networks'] = null !== $this->networks ? $this->networks->toMap() : null;
        }
        if (null !== $this->nodeGroups) {
            $res['NodeGroups'] = [];
            if (null !== $this->nodeGroups && \is_array($this->nodeGroups)) {
                $n = 0;
                foreach ($this->nodeGroups as $item) {
                    $res['NodeGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterDescription'])) {
            $model->clusterDescription = $map['ClusterDescription'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['Components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IgnoreFailedNodeTasks'])) {
            $model->ignoreFailedNodeTasks = $map['IgnoreFailedNodeTasks'];
        }
        if (isset($map['Networks'])) {
            $model->networks = networks::fromMap($map['Networks']);
        }
        if (isset($map['NodeGroups'])) {
            if (!empty($map['NodeGroups'])) {
                $model->nodeGroups = [];
                $n                 = 0;
                foreach ($map['NodeGroups'] as $item) {
                    $model->nodeGroups[$n++] = null !== $item ? nodeGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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

        return $model;
    }
}
