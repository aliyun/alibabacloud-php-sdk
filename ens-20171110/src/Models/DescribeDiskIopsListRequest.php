<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskIopsListRequest extends Model
{
    /**
     * @description The ID of the disk. Format: d-\\*\\*\\*\\*\\*\\*\\*\\*\\*\\*\\*.
     *
     * This parameter is required.
     *
     * @example d-5tzm9wnhzlhjzcbtxo465****
     *
     * @var string
     */
    public $diskId;

    /**
     * @description The beginning of the time range to query. Specify the time in the format of yyyy-MM-dd HH:mm:ss. The time range specified by the StartTime and EndTime parameters cannot exceed one day for a query.
     *
     * This parameter is required.
     *
     * @example 2023-12-14 23:59:59
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The beginning of the time range to query. Specify the time in the format of yyyy-MM-dd HH:mm:ss.
     *
     * This parameter is required.
     *
     * @example 2023-12-14 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'diskId' => 'DiskId',
        'endTime' => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskIopsListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
