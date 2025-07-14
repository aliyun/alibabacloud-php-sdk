<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImageRequest;

use AlibabaCloud\Tea\Model;

class features extends Model
{
    /**
     * @description The image metadata access mode. Valid values:
     *
     *   v1: You cannot set the image metadata access mode to security hardening when you create instances from the image.
     *   v2: You can set the image metadata access mode to security hardening when you create instances from the image.
     *
     * When you use a snapshot to create instances, the default value is set to 1. If you use an instance to create an image, the value of the ImdsSupport parameter is used by default.
     *
     * @example v2
     *
     * @var string
     */
    public $imdsSupport;
    protected $_name = [
        'imdsSupport' => 'ImdsSupport',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imdsSupport) {
            $res['ImdsSupport'] = $this->imdsSupport;
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

        return $model;
    }
}
