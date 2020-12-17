<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeKubernetesVersionMetadataResponse;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeKubernetesVersionMetadataResponse\body\images;
use AlibabaCloud\SDK\CS\V20151215\Models\Runtimes;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description Kubernetes版本特性。
     *
     * @var mixed[]
     */
    public $capabilities;

    /**
     * @description ECS系统镜像列表。
     *
     * @var images[]
     */
    public $images;

    /**
     * @description Kubernetes版本元数据信息。
     *
     * @var mixed[]
     */
    public $metaData;

    /**
     * @description 容器运行时详情。
     *
     * @var Runtimes[]
     */
    public $runtimes;

    /**
     * @description Kubernetes版本。
     *
     * @var string
     */
    public $version;

    /**
     * @description 是否为多可用区。
     *
     * @var string
     */
    public $multiAz;
    protected $_name = [
        'capabilities' => 'capabilities',
        'images'       => 'images',
        'metaData'     => 'meta_data',
        'runtimes'     => 'runtimes',
        'version'      => 'version',
        'multiAz'      => 'multi_az',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capabilities) {
            $res['capabilities'] = $this->capabilities;
        }
        if (null !== $this->images) {
            $res['images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metaData) {
            $res['meta_data'] = $this->metaData;
        }
        if (null !== $this->runtimes) {
            $res['runtimes'] = [];
            if (null !== $this->runtimes && \is_array($this->runtimes)) {
                $n = 0;
                foreach ($this->runtimes as $item) {
                    $res['runtimes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->multiAz) {
            $res['multi_az'] = $this->multiAz;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['capabilities'])) {
            $model->capabilities = $map['capabilities'];
        }
        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n             = 0;
                foreach ($map['images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['meta_data'])) {
            $model->metaData = $map['meta_data'];
        }
        if (isset($map['runtimes'])) {
            if (!empty($map['runtimes'])) {
                $model->runtimes = [];
                $n               = 0;
                foreach ($map['runtimes'] as $item) {
                    $model->runtimes[$n++] = null !== $item ? Runtimes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['multi_az'])) {
            $model->multiAz = $map['multi_az'];
        }

        return $model;
    }
}
