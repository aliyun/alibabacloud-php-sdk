<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageAttributeRequest;

use AlibabaCloud\Tea\Model;

class features extends Model
{
    /**
     * @var string
     */
    public $imdsSupport;

    /**
     * @description Specifies whether to support the Non-Volatile Memory Express (NVMe) protocol. Valid values:
     *
     *   supported: The image supports NVMe. Instances created from this image also support NVMe.
     *   unsupported: The image does not support NVMe. Instances created from this image do not support NVMe.
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
