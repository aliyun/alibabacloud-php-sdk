<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ReplaceSystemDiskRequest;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description The capacity of the new system disk. Unit: GiB. Valid values:
     *
     *   Basic disk: Max{20, Size of the image corresponding to ImageId} to 500.
     *   Other disks: Max{20, Size of the image corresponding to ImageId} to 2,048.
     *
     * >  If the capacity of the new system disk exceeds `Max{20, Capacity of the original system disk}`, you are charged for excess capacity.
     * @example 80
     *
     * @var int
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
