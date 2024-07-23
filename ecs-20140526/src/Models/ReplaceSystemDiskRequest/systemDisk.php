<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ReplaceSystemDiskRequest;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description The capacity of the new system disk. Unit: GiB. Valid values for different disk categories:
     *
     *   Basic disk: Max{20, Size of the image specified by ImageId} to 500.
     *
     *   Enterprise SSD (ESSD):
     *
     *   PL0: Max{1, Size of the image specified by ImageId} to 2048.
     *   PL1: Max{20, Size of the image specified by ImageId} to 2048.
     *   PL2: Max{461, Size of the image specified by ImageId} to 2048.
     *   PL3: Max{1261, Size of the image specified by ImageId} to 2048.
     *
     *   ESSD AutoPL disk: Max{1, Size of the image specified by ImageId} to 2048.
     *
     *   Other disk categories: Max{20, Size of the image specified by ImageId} to 2048.
     *
     * >  If the capacity of the new system disk exceeds `Max{20, Capacity of the original system disk}`, you are charged for the excess capacity.
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
