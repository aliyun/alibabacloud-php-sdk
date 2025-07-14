<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\importImageOptions;

use AlibabaCloud\Tea\Model;

class features extends Model
{
    /**
     * @description Specifies whether the imported source image supports the Non-Volatile Memory Express (NVMe) protocol. Valid values:
     *
     *   supported: The image supports the NVMe protocol. Instances created from the image also support the NVMe protocol.
     *   unsupported: The image does not support the NVMe protocol. Instances created from the image do not support the NVMe protocol.
     *
     * Default value: unsupported.
     *
     * @example supported
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
     * @return features
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
