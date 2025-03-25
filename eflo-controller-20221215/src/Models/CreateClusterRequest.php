<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\components;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\nodeGroups;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\tag;

class CreateClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clusterDescription;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var components[]
     */
    public $components;

    /**
     * @var string
     */
    public $hpnZone;

    /**
     * @var bool
     */
    public $ignoreFailedNodeTasks;

    /**
     * @var networks
     */
    public $networks;

    /**
     * @var string[]
     */
    public $nimizVSwitches;

    /**
     * @var nodeGroups[]
     */
    public $nodeGroups;

    /**
     * @var bool
     */
    public $openEniJumboFrame;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
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

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        if (null !== $this->networks) {
            $this->networks->validate();
        }
        if (\is_array($this->nimizVSwitches)) {
            Model::validateArray($this->nimizVSwitches);
        }
        if (\is_array($this->nodeGroups)) {
            Model::validateArray($this->nodeGroups);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->components)) {
                $res['Components'] = [];
                $n1 = 0;
                foreach ($this->components as $item1) {
                    $res['Components'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['Networks'] = null !== $this->networks ? $this->networks->toArray($noStream) : $this->networks;
        }

        if (null !== $this->nimizVSwitches) {
            if (\is_array($this->nimizVSwitches)) {
                $res['NimizVSwitches'] = [];
                $n1 = 0;
                foreach ($this->nimizVSwitches as $item1) {
                    $res['NimizVSwitches'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nodeGroups) {
            if (\is_array($this->nodeGroups)) {
                $res['NodeGroups'] = [];
                $n1 = 0;
                foreach ($this->nodeGroups as $item1) {
                    $res['NodeGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Components'] as $item1) {
                    $model->components[$n1++] = components::fromMap($item1);
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
                $model->nimizVSwitches = [];
                $n1 = 0;
                foreach ($map['NimizVSwitches'] as $item1) {
                    $model->nimizVSwitches[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NodeGroups'])) {
            if (!empty($map['NodeGroups'])) {
                $model->nodeGroups = [];
                $n1 = 0;
                foreach ($map['NodeGroups'] as $item1) {
                    $model->nodeGroups[$n1++] = nodeGroups::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
