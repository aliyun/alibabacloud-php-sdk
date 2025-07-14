<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageAttributeRequest;

use AlibabaCloud\Tea\Model;

class features extends Model
{
    /**
     * @description The image metadata access mode. Valid values:
     *
     *   v1: You cannot set the image metadata access mode to security hardening when you create instances from the image.
     *
     *   v2: You can set the image metadata access mode to security hardening when you create instances from the image.
     **Note** You cannot change the value of ImdsSupport from v2 to v1 for an image. To change the value of ImdsSupport from v2 to v1 for an image, use the snapshots associated with the image to create an image and set ImdsSupport to v1 for the new image.
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

    public function validate() {}

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
