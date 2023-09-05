<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskMonitorDataListResponseBody;

use AlibabaCloud\Tea\Model;

class monitorData extends Model
{
    /**
     * @description The number of burst I/O operations.
     *
     * @example 2000
     *
     * @var int
     */
    public $burstIOCount;

    /**
     * @description The ID of the disk.
     *
     * @example d-bp67acfmxazb4p****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The beginning of the time range during which the performance of the disk bursts. The time follows the [ISO 8601](~~25696~~) standard in the `yyyy-MM-ddTHH:mm:ssZ` format. The time is displayed in UTC.
     *
     * @example 2022-06-01T08:00:00Z
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'burstIOCount' => 'BurstIOCount',
        'diskId'       => 'DiskId',
        'timestamp'    => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->burstIOCount) {
            $res['BurstIOCount'] = $this->burstIOCount;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BurstIOCount'])) {
            $model->burstIOCount = $map['BurstIOCount'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
