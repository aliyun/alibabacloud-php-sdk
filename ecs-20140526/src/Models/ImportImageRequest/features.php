<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest;

use AlibabaCloud\Tea\Model;

class features extends Model
{
    /**
     * @description The metadata access mode version of the image. Valid values:
     *
     *   v1: You cannot set the metadata access mode to security hardening when you create instances from the image.
     *   v2: You can set the metadata access mode to security hardening when you create instances from the image.
     *
     * Default value: v1.
     * @example v2
     *
     * @var string
     */
    public $imdsSupport;

    /**
     * @description Specifies whether the image supports the Non-Volatile Memory Express (NVMe) protocol. Valid values:
     *
     *   supported: The image supports the NVMe protocol. Instances created from the image also support the NVMe protocol.
     *   unsupported: The image does not support the NVMe protocol. Instances created from the image do not support the NVMe protocol.
     *
     * @example supported
     *
     * @var string
     */
    public $nvmeSupport;
    protected $_name = [
        'imdsSupport' => 'ImdsSupport',
        'nvmeSupport' => 'NvmeSupport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imdsSupport) {
            $res['ImdsSupport'] = $this->imdsSupport;
        }
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
        if (isset($map['ImdsSupport'])) {
            $model->imdsSupport = $map['ImdsSupport'];
        }
        if (isset($map['NvmeSupport'])) {
            $model->nvmeSupport = $map['NvmeSupport'];
        }

        return $model;
    }
}
