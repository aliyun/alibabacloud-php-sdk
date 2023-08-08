<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpgradeClusterNodepoolRequest extends Model
{
    /**
     * @example aliyun_2_1903_x64_20G_alibase_20200529.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @example 1.22.15-aliyun.1
     *
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @var string
     */
    public $runtimeType;

    /**
     * @example 1.5.10
     *
     * @var string
     */
    public $runtimeVersion;
    protected $_name = [
        'imageId'           => 'image_id',
        'kubernetesVersion' => 'kubernetes_version',
        'runtimeType'       => 'runtime_type',
        'runtimeVersion'    => 'runtime_version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->kubernetesVersion) {
            $res['kubernetes_version'] = $this->kubernetesVersion;
        }
        if (null !== $this->runtimeType) {
            $res['runtime_type'] = $this->runtimeType;
        }
        if (null !== $this->runtimeVersion) {
            $res['runtime_version'] = $this->runtimeVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeClusterNodepoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['kubernetes_version'])) {
            $model->kubernetesVersion = $map['kubernetes_version'];
        }
        if (isset($map['runtime_type'])) {
            $model->runtimeType = $map['runtime_type'];
        }
        if (isset($map['runtime_version'])) {
            $model->runtimeVersion = $map['runtime_version'];
        }

        return $model;
    }
}
