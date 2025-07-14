<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\imageOptions;

use AlibabaCloud\Tea\Model;

class imageFeatures extends Model
{
    /**
     * @description Specifies whether the image created based on the image template supports the NVMe protocol. Valid values:
     *
     *   supported: The image supports the NVMe protocol. Instances created from the image also support the NVMe protocol.
     *   unsupported: The image does not support the NVMe protocol. Instances created from the image do not support the NVMe protocol.
     *   auto: The system automatically detects whether the image supports the NVMe protocol. The system automatically detects whether the NVMe driver is installed on your image before the new image is built. If you install or uninstall the NVMe driver during the image building process, the detection result may be incorrect. We recommend that you set the value to supported or unsupported based on the image building content.
     *
     * @example auto
     *
     * @var string
     */
    public $nvmeSupport;
    protected $_name = [
        'nvmeSupport' => 'NvmeSupport',
    ];

    public function validate() {}

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
