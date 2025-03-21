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
     * @description Cluster description
     *
     * @example Cluster description
     *
     * @var string
     */
    public $clusterDescription;

    /**
     * @description Cluster name
     *
     * @example Standard_Cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Cluster type
     *
     * @example Lite
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description Components (software instances)
     *
     * @var components[]
     */
    public $components;

    /**
     * @description Cluster number
     *
     * @example A1
     *
     * @var string
     */
    public $hpnZone;

    /**
     * @description Whether to allow skipping failed nodes, default value is False
     *
     * @example False
     *
     * @var bool
     */
    public $ignoreFailedNodeTasks;

    /**
     * @description Network information
     *
     * @var networks
     */
    public $networks;

    /**
     * @description Node VSwitches
     *
     * @var string[]
     */
    public $nimizVSwitches;

    /**
     * @description Node group list
     *
     * @var nodeGroups[]
     */
    public $nodeGroups;

    /**
     * @description Open Eni Jumbo Frame
     *
     * @example false
     *
     * @var bool
     */
    public $openEniJumboFrame;

    /**
     * @description Resource group ID
     *
     * @example rg-aek2xdkc6icwfha
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Resource tags
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clusterDescription' => 'ClusterDescription',
        'clusterName' => 'ClusterName',
        'clusterType' => 'ClusterType',
        'components' => 'Components',
        'hpnZone' => 'HpnZone',
        'ignoreFailedNodeTasks' => 'IgnoreFailedNodeTasks',
        'networks' => 'Networks',
        'nimizVSwitches' => 'NimizVSwitches',
        'nodeGroups' => 'NodeGroups',
        'openEniJumboFrame' => 'OpenEniJumboFrame',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
    ];

    public function validate() {}

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
        if (null !== $this->hpnZone) {
            $res['HpnZone'] = $this->hpnZone;
        }
        if (null !== $this->ignoreFailedNodeTasks) {
            $res['IgnoreFailedNodeTasks'] = $this->ignoreFailedNodeTasks;
        }
        if (null !== $this->networks) {
            $res['Networks'] = null !== $this->networks ? $this->networks->toMap() : null;
        }
        if (null !== $this->nimizVSwitches) {
            $res['NimizVSwitches'] = $this->nimizVSwitches;
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
        if (null !== $this->openEniJumboFrame) {
            $res['OpenEniJumboFrame'] = $this->openEniJumboFrame;
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
                $n = 0;
                foreach ($map['Components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HpnZone'])) {
            $model->hpnZone = $map['HpnZone'];
        }
        if (isset($map['IgnoreFailedNodeTasks'])) {
            $model->ignoreFailedNodeTasks = $map['IgnoreFailedNodeTasks'];
        }
        if (isset($map['Networks'])) {
            $model->networks = networks::fromMap($map['Networks']);
        }
        if (isset($map['NimizVSwitches'])) {
            if (!empty($map['NimizVSwitches'])) {
                $model->nimizVSwitches = $map['NimizVSwitches'];
            }
        }
        if (isset($map['NodeGroups'])) {
            if (!empty($map['NodeGroups'])) {
                $model->nodeGroups = [];
                $n = 0;
                foreach ($map['NodeGroups'] as $item) {
                    $model->nodeGroups[$n++] = null !== $item ? nodeGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OpenEniJumboFrame'])) {
            $model->openEniJumboFrame = $map['OpenEniJumboFrame'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
