<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\Tag;
use AlibabaCloud\SDK\CS\V20151215\Models\Taint;

class kubernetesConfig extends Model
{
    /**
     * @var bool
     */
    public $cmsEnabled;
    /**
     * @var string
     */
    public $cpuPolicy;
    /**
     * @var Tag[]
     */
    public $labels;
    /**
     * @var string
     */
    public $nodeNameMode;
    /**
     * @var string
     */
    public $preUserData;
    /**
     * @var string
     */
    public $runtime;
    /**
     * @var string
     */
    public $runtimeVersion;
    /**
     * @var Taint[]
     */
    public $taints;
    /**
     * @var bool
     */
    public $unschedulable;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'cmsEnabled'     => 'cms_enabled',
        'cpuPolicy'      => 'cpu_policy',
        'labels'         => 'labels',
        'nodeNameMode'   => 'node_name_mode',
        'preUserData'    => 'pre_user_data',
        'runtime'        => 'runtime',
        'runtimeVersion' => 'runtime_version',
        'taints'         => 'taints',
        'unschedulable'  => 'unschedulable',
        'userData'       => 'user_data',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->taints)) {
            Model::validateArray($this->taints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cmsEnabled) {
            $res['cms_enabled'] = $this->cmsEnabled;
        }

        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                $n1            = 0;
                foreach ($this->labels as $item1) {
                    $res['labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nodeNameMode) {
            $res['node_name_mode'] = $this->nodeNameMode;
        }

        if (null !== $this->preUserData) {
            $res['pre_user_data'] = $this->preUserData;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = $this->runtime;
        }

        if (null !== $this->runtimeVersion) {
            $res['runtime_version'] = $this->runtimeVersion;
        }

        if (null !== $this->taints) {
            if (\is_array($this->taints)) {
                $res['taints'] = [];
                $n1            = 0;
                foreach ($this->taints as $item1) {
                    $res['taints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->unschedulable) {
            $res['unschedulable'] = $this->unschedulable;
        }

        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
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
        if (isset($map['cms_enabled'])) {
            $model->cmsEnabled = $map['cms_enabled'];
        }

        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                $n1            = 0;
                foreach ($map['labels'] as $item1) {
                    $model->labels[$n1++] = Tag::fromMap($item1);
                }
            }
        }

        if (isset($map['node_name_mode'])) {
            $model->nodeNameMode = $map['node_name_mode'];
        }

        if (isset($map['pre_user_data'])) {
            $model->preUserData = $map['pre_user_data'];
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
                $n1            = 0;
                foreach ($map['taints'] as $item1) {
                    $model->taints[$n1++] = Taint::fromMap($item1);
                }
            }
        }

        if (isset($map['unschedulable'])) {
            $model->unschedulable = $map['unschedulable'];
        }

        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }

        return $model;
    }
}
