<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsResponseBody\instanceSystemEventSet\instanceSystemEventType\extendedAttribute\inactiveDisks;

use AlibabaCloud\Tea\Model;

class inactiveDisk extends Model
{
    /**
     * @description The time when the disk was created. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2018-11-30T06:32:31Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The category of the disk. Valid values:
     *
     *   cloud: basic disk
     *   cloud_efficiency: ultra disk
     *   cloud_ssd: standard SSD
     *   cloud_essd: enhanced SSD (ESSD) cloud_auto: ESSD AutoPL disk
     *   local_ssd_pro: I/O-intensive local disk.
     *   local_hdd_pro: throughput-intensive local disk
     *   ephemeral: retired local disk
     *   ephemeral_ssd: retired local SSD
     *
     * @example cloud_efficiency
     *
     * @var string
     */
    public $deviceCategory;

    /**
     * @description The size of the disk. Unit: GiB.
     *
     * @example 80
     *
     * @var string
     */
    public $deviceSize;

    /**
     * @description The type of the disk. Valid values:
     *
     *   system: system disk
     *   data: data disk
     *
     * @example data
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description The time when the disk was released. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-11-30T06:32:31Z
     *
     * @var string
     */
    public $releaseTime;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'deviceCategory' => 'DeviceCategory',
        'deviceSize'     => 'DeviceSize',
        'deviceType'     => 'DeviceType',
        'releaseTime'    => 'ReleaseTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deviceCategory) {
            $res['DeviceCategory'] = $this->deviceCategory;
        }
        if (null !== $this->deviceSize) {
            $res['DeviceSize'] = $this->deviceSize;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inactiveDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeviceCategory'])) {
            $model->deviceCategory = $map['DeviceCategory'];
        }
        if (isset($map['DeviceSize'])) {
            $model->deviceSize = $map['DeviceSize'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        return $model;
    }
}
