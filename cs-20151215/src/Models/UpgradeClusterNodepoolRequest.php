<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterNodepoolRequest\rollingPolicy;

class UpgradeClusterNodepoolRequest extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @var string[]
     */
    public $nodeNames;

    /**
     * @var rollingPolicy
     */
    public $rollingPolicy;

    /**
     * @var string
     */
    public $runtimeType;

    /**
     * @var string
     */
    public $runtimeVersion;

    /**
     * @var bool
     */
    public $useReplace;
    protected $_name = [
        'imageId' => 'image_id',
        'kubernetesVersion' => 'kubernetes_version',
        'nodeNames' => 'node_names',
        'rollingPolicy' => 'rolling_policy',
        'runtimeType' => 'runtime_type',
        'runtimeVersion' => 'runtime_version',
        'useReplace' => 'use_replace',
    ];

    public function validate()
    {
        if (\is_array($this->nodeNames)) {
            Model::validateArray($this->nodeNames);
        }
        if (null !== $this->rollingPolicy) {
            $this->rollingPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }

        if (null !== $this->kubernetesVersion) {
            $res['kubernetes_version'] = $this->kubernetesVersion;
        }

        if (null !== $this->nodeNames) {
            if (\is_array($this->nodeNames)) {
                $res['node_names'] = [];
                $n1 = 0;
                foreach ($this->nodeNames as $item1) {
                    $res['node_names'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->rollingPolicy) {
            $res['rolling_policy'] = null !== $this->rollingPolicy ? $this->rollingPolicy->toArray($noStream) : $this->rollingPolicy;
        }

        if (null !== $this->runtimeType) {
            $res['runtime_type'] = $this->runtimeType;
        }

        if (null !== $this->runtimeVersion) {
            $res['runtime_version'] = $this->runtimeVersion;
        }

        if (null !== $this->useReplace) {
            $res['use_replace'] = $this->useReplace;
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
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }

        if (isset($map['kubernetes_version'])) {
            $model->kubernetesVersion = $map['kubernetes_version'];
        }

        if (isset($map['node_names'])) {
            if (!empty($map['node_names'])) {
                $model->nodeNames = [];
                $n1 = 0;
                foreach ($map['node_names'] as $item1) {
                    $model->nodeNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['rolling_policy'])) {
            $model->rollingPolicy = rollingPolicy::fromMap($map['rolling_policy']);
        }

        if (isset($map['runtime_type'])) {
            $model->runtimeType = $map['runtime_type'];
        }

        if (isset($map['runtime_version'])) {
            $model->runtimeVersion = $map['runtime_version'];
        }

        if (isset($map['use_replace'])) {
            $model->useReplace = $map['use_replace'];
        }

        return $model;
    }
}
