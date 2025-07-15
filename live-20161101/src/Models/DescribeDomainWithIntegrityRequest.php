<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainWithIntegrityRequest extends Model
{
    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2017-10-10T20:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The integrity.
     *
     * This parameter is required.
     *
     * @example 0.95
     *
     * @var float
     */
    public $integrity;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2017-10-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'integrity' => 'Integrity',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->integrity) {
            $res['Integrity'] = $this->integrity;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainWithIntegrityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Integrity'])) {
            $model->integrity = $map['Integrity'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
