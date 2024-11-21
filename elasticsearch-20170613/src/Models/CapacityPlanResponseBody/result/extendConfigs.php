<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanResponseBody\result;

use AlibabaCloud\Tea\Model;

class extendConfigs extends Model
{
    /**
     * @description Configuration type, with a single value: sharedDisk.
     *
     * > This extendConfigs attribute may appear when the planned instance type is Advanced.
     * @example sharedDisk
     *
     * @var string
     */
    public $configType;

    /**
     * @description Disk size, in GiB.
     *
     * @example 2048
     *
     * @var int
     */
    public $disk;

    /**
     * @description Disk type, with a single value: CPFS_PREMIUM.
     *
     * > This extendConfigs attribute may appear when the planned instance type is Advanced.
     * @example CPFS_PREMIUM
     *
     * @var string
     */
    public $diskType;
    protected $_name = [
        'configType' => 'ConfigType',
        'disk'       => 'Disk',
        'diskType'   => 'DiskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extendConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        return $model;
    }
}
