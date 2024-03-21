<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @example d-jedbpr4sl9l37****
     *
     * @var string
     */
    public $diskId;

    /**
     * @example 80
     *
     * @var int
     */
    public $diskSize;

    /**
     * @example SYSTEM
     *
     * @var string
     */
    public $diskType;
    protected $_name = [
        'diskId'   => 'DiskId',
        'diskSize' => 'DiskSize',
        'diskType' => 'DiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
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
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        return $model;
    }
}
