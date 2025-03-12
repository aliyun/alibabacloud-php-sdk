<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\imageOptions;

use AlibabaCloud\Tea\Model;

class imageFeatures extends Model
{
    /**
     * @description 构建的目标镜像是否支持 NVMe。可能值：
     * - auto：自动检测。由系统自动检测您的镜像是否安装NVMe驱动，该行为发生在构建阶段前，若您在构建时安装或者卸载了NVMe驱动，可能会出现结果偏差，建议您根据构建内容设置为supported或unsupported。
     * @example auto
     *
     * @var string
     */
    public $nvmeSupport;
    protected $_name = [
        'nvmeSupport' => 'NvmeSupport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nvmeSupport) {
            $res['NvmeSupport'] = $this->nvmeSupport;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageFeatures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NvmeSupport'])) {
            $model->nvmeSupport = $map['NvmeSupport'];
        }

        return $model;
    }
}
