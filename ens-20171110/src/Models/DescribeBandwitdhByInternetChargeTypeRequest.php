<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeBandwitdhByInternetChargeTypeRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     *   Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *   If the value of the seconds place is not 00, the start time is automatically set to the next minute.
     *
     * @example 2022-01-18T09:39:54Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou-cbn-2
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The Internet service provider (ISP). Valid values:
     *
     *   cmcc: China Mobile
     *   telecom: China Telecom
     *   unicom: China Unicom
     *   multiCarrier: multi-line ISP
     *
     * @example unicom
     *
     * @var string
     */
    public $isp;

    /**
     * @description The beginning of the time range to query.
     *
     *   Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *   If the value of the seconds place is not 00, the start time is automatically set to the next minute.
     *
     * @example 2021-11-15T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'     => 'EndTime',
        'ensRegionId' => 'EnsRegionId',
        'isp'         => 'Isp',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBandwitdhByInternetChargeTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
