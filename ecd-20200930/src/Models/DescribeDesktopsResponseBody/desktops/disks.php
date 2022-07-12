<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class disks extends Model
{
    /**
     * @var string
     */
    public $diskId;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $performanceLevel;
    protected $_name = [
        'diskId'           => 'DiskId',
        'diskSize'         => 'DiskSize',
        'diskType'         => 'DiskType',
        'performanceLevel' => 'PerformanceLevel',
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
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
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
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }

        return $model;
    }
}
