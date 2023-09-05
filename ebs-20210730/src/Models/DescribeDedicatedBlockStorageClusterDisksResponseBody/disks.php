<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClusterDisksResponseBody;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClusterDisksResponseBody\disks\disk;
use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @description Details about the cloud disks.
     *
     * @var disk[]
     */
    public $disk;
    protected $_name = [
        'disk' => 'Disk',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disk) {
            $res['Disk'] = [];
            if (null !== $this->disk && \is_array($this->disk)) {
                $n = 0;
                foreach ($this->disk as $item) {
                    $res['Disk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Disk'])) {
            if (!empty($map['Disk'])) {
                $model->disk = [];
                $n           = 0;
                foreach ($map['Disk'] as $item) {
                    $model->disk[$n++] = null !== $item ? disk::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
