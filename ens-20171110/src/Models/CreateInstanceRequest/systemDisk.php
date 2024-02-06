<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\CreateInstanceRequest;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description The size of the system disk. Unit: GiB. Valid values: **20** and **40**. The value cannot be smaller than the size of the image and must be a multiple of 10 GiB.
     *
     * @example 40
     *
     * @var string
     */
    public $size;
    protected $_name = [
        'size' => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
