<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\autoScaling;
use AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\interconnectConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\kubernetesConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\management;
use AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\nodeConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\nodepoolInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\scalingGroup;
use AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\teeConfig;
use AlibabaCloud\Tea\Model;

class Nodepool extends Model
{
    /**
     * @var autoScaling
     */
    public $autoScaling;

    /**
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $count;

    /**
     * @deprecated
     *
     * @var interconnectConfig
     */
    public $interconnectConfig;

    /**
     * @example basic
     *
     * @var string
     */
    public $interconnectMode;

    /**
     * @var kubernetesConfig
     */
    public $kubernetesConfig;

    /**
     * @var management
     */
    public $management;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxNodes;

    /**
     * @var nodeConfig
     */
    public $nodeConfig;

    /**
     * @var nodepoolInfo
     */
    public $nodepoolInfo;

    /**
     * @var scalingGroup
     */
    public $scalingGroup;

    /**
     * @var teeConfig
     */
    public $teeConfig;
    protected $_name = [
        'autoScaling' => 'auto_scaling',
        'count' => 'count',
        'interconnectConfig' => 'interconnect_config',
        'interconnectMode' => 'interconnect_mode',
        'kubernetesConfig' => 'kubernetes_config',
        'management' => 'management',
        'maxNodes' => 'max_nodes',
        'nodeConfig' => 'node_config',
        'nodepoolInfo' => 'nodepool_info',
        'scalingGroup' => 'scaling_group',
        'teeConfig' => 'tee_config',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoScaling) {
            $res['auto_scaling'] = null !== $this->autoScaling ? $this->autoScaling->toMap() : null;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->interconnectConfig) {
            $res['interconnect_config'] = null !== $this->interconnectConfig ? $this->interconnectConfig->toMap() : null;
        }
        if (null !== $this->interconnectMode) {
            $res['interconnect_mode'] = $this->interconnectMode;
        }
        if (null !== $this->kubernetesConfig) {
            $res['kubernetes_config'] = null !== $this->kubernetesConfig ? $this->kubernetesConfig->toMap() : null;
        }
        if (null !== $this->management) {
            $res['management'] = null !== $this->management ? $this->management->toMap() : null;
        }
        if (null !== $this->maxNodes) {
            $res['max_nodes'] = $this->maxNodes;
        }
        if (null !== $this->nodeConfig) {
            $res['node_config'] = null !== $this->nodeConfig ? $this->nodeConfig->toMap() : null;
        }
        if (null !== $this->nodepoolInfo) {
            $res['nodepool_info'] = null !== $this->nodepoolInfo ? $this->nodepoolInfo->toMap() : null;
        }
        if (null !== $this->scalingGroup) {
            $res['scaling_group'] = null !== $this->scalingGroup ? $this->scalingGroup->toMap() : null;
        }
        if (null !== $this->teeConfig) {
            $res['tee_config'] = null !== $this->teeConfig ? $this->teeConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Nodepool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_scaling'])) {
            $model->autoScaling = autoScaling::fromMap($map['auto_scaling']);
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['interconnect_config'])) {
            $model->interconnectConfig = interconnectConfig::fromMap($map['interconnect_config']);
        }
        if (isset($map['interconnect_mode'])) {
            $model->interconnectMode = $map['interconnect_mode'];
        }
        if (isset($map['kubernetes_config'])) {
            $model->kubernetesConfig = kubernetesConfig::fromMap($map['kubernetes_config']);
        }
        if (isset($map['management'])) {
            $model->management = management::fromMap($map['management']);
        }
        if (isset($map['max_nodes'])) {
            $model->maxNodes = $map['max_nodes'];
        }
        if (isset($map['node_config'])) {
            $model->nodeConfig = nodeConfig::fromMap($map['node_config']);
        }
        if (isset($map['nodepool_info'])) {
            $model->nodepoolInfo = nodepoolInfo::fromMap($map['nodepool_info']);
        }
        if (isset($map['scaling_group'])) {
            $model->scalingGroup = scalingGroup::fromMap($map['scaling_group']);
        }
        if (isset($map['tee_config'])) {
            $model->teeConfig = teeConfig::fromMap($map['tee_config']);
        }

        return $model;
    }
}
