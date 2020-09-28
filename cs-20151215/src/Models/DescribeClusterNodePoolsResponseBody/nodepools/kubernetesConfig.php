<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\kubernetesConfig\labels;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodePoolsResponseBody\nodepools\kubernetesConfig\taints;
use AlibabaCloud\Tea\Model;

class kubernetesConfig extends Model
{
    /**
     * @description 是否开启云监控
     *
     * @var bool
     */
    public $cmsEnabled;

    /**
     * @description CPU管理策略
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description ECS标签。
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @description 节点命名策略。
     *
     * @var string
     */
    public $nodeNameMode;

    /**
     * @description 是否覆盖主机名。
     *
     * @var bool
     */
    public $overwriteHostname;

    /**
     * @description 容器运行时
     *
     * @var string
     */
    public $runtime;

    /**
     * @description 容器运行时版本
     *
     * @var string
     */
    public $runtimeVersion;

    /**
     * @description 污点配置
     *
     * @var taints[]
     */
    public $taints;

    /**
     * @description 节点自定义数据
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'cmsEnabled'        => 'cms_enabled',
        'cpuPolicy'         => 'cpu_policy',
        'labels'            => 'labels',
        'nodeNameMode'      => 'node_name_mode',
        'overwriteHostname' => 'overwrite_hostname',
        'runtime'           => 'runtime',
        'runtimeVersion'    => 'runtime_version',
        'taints'            => 'taints',
        'userData'          => 'user_data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmsEnabled) {
            $res['cms_enabled'] = $this->cmsEnabled;
        }
        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }
        if (null !== $this->labels) {
            $res['labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeNameMode) {
            $res['node_name_mode'] = $this->nodeNameMode;
        }
        if (null !== $this->overwriteHostname) {
            $res['overwrite_hostname'] = $this->overwriteHostname;
        }
        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
        }
        if (null !== $this->runtimeVersion) {
            $res['runtime_version'] = $this->runtimeVersion;
        }
        if (null !== $this->taints) {
            $res['taints'] = [];
            if (null !== $this->taints && \is_array($this->taints)) {
                $n = 0;
                foreach ($this->taints as $item) {
                    $res['taints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kubernetesConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cms_enabled'])) {
            $model->cmsEnabled = $map['cms_enabled'];
        }
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['node_name_mode'])) {
            $model->nodeNameMode = $map['node_name_mode'];
        }
        if (isset($map['overwrite_hostname'])) {
            $model->overwriteHostname = $map['overwrite_hostname'];
        }
        if (isset($map['runtime'])) {
            $model->runtime = $map['runtime'];
        }
        if (isset($map['runtime_version'])) {
            $model->runtimeVersion = $map['runtime_version'];
        }
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? taints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }

        return $model;
    }
}
