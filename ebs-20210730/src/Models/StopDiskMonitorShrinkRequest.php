<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class StopDiskMonitorShrinkRequest extends Model
{
    /**
     * @description The IDs of the disks for which you want to disable near real-time monitoring.
     *
     * @var string
     */
    public $diskIdsShrink;

    /**
     * @description The ID of the region in which you want to disable near real-time monitoring for disks. You can call the [DescribeRegions](~~354276~~) operation to query the list of regions that support CloudLens for EBS.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'diskIdsShrink' => 'DiskIds',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskIdsShrink) {
            $res['DiskIds'] = $this->diskIdsShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopDiskMonitorShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskIds'])) {
            $model->diskIdsShrink = $map['DiskIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
