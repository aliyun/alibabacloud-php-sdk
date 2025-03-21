<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateClusterShrinkRequest extends Model
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
     * @var string
     */
    public $componentsShrink;

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
     * @var string
     */
    public $networksShrink;

    /**
     * @description Node VSwitches
     *
     * @var string
     */
    public $nimizVSwitchesShrink;

    /**
     * @description Node group list
     *
     * @var string
     */
    public $nodeGroupsShrink;

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
        'componentsShrink' => 'Components',
        'hpnZone' => 'HpnZone',
        'ignoreFailedNodeTasks' => 'IgnoreFailedNodeTasks',
        'networksShrink' => 'Networks',
        'nimizVSwitchesShrink' => 'NimizVSwitches',
        'nodeGroupsShrink' => 'NodeGroups',
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
        if (null !== $this->componentsShrink) {
            $res['Components'] = $this->componentsShrink;
        }
        if (null !== $this->hpnZone) {
            $res['HpnZone'] = $this->hpnZone;
        }
        if (null !== $this->ignoreFailedNodeTasks) {
            $res['IgnoreFailedNodeTasks'] = $this->ignoreFailedNodeTasks;
        }
        if (null !== $this->networksShrink) {
            $res['Networks'] = $this->networksShrink;
        }
        if (null !== $this->nimizVSwitchesShrink) {
            $res['NimizVSwitches'] = $this->nimizVSwitchesShrink;
        }
        if (null !== $this->nodeGroupsShrink) {
            $res['NodeGroups'] = $this->nodeGroupsShrink;
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
     * @return CreateClusterShrinkRequest
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
            $model->componentsShrink = $map['Components'];
        }
        if (isset($map['HpnZone'])) {
            $model->hpnZone = $map['HpnZone'];
        }
        if (isset($map['IgnoreFailedNodeTasks'])) {
            $model->ignoreFailedNodeTasks = $map['IgnoreFailedNodeTasks'];
        }
        if (isset($map['Networks'])) {
            $model->networksShrink = $map['Networks'];
        }
        if (isset($map['NimizVSwitches'])) {
            $model->nimizVSwitchesShrink = $map['NimizVSwitches'];
        }
        if (isset($map['NodeGroups'])) {
            $model->nodeGroupsShrink = $map['NodeGroups'];
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
