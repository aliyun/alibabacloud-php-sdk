<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetDataTrendRequest extends Model
{
    /**
     * @description The type of the security data that you want to query. Valid values:
     *
     *   **HC_NEW**: the number of new baseline risks.
     *   **HC_OPERATE**: the number of handled baseline risks.
     *   **VUL_NEW**: the number of new vulnerabilities.
     *   **VUL_OPERATE**: the number of handled vulnerabilities.
     *   **SUSP_NEW**: the number of new alerts.
     *   **SUSP_OPERATE**: the number of handled alerts.
     *
     * This parameter is required.
     * @example HC_NEW,HC_OPERATE
     *
     * @var string
     */
    public $bizTypes;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1721923200000
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @description The interval of the data that you want to query. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 86400000
     *
     * @var int
     */
    public $interval;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1687334501000
     *
     * @var int
     */
    public $startTimestamp;
    protected $_name = [
        'bizTypes'       => 'BizTypes',
        'endTimestamp'   => 'EndTimestamp',
        'interval'       => 'Interval',
        'startTimestamp' => 'StartTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTypes) {
            $res['BizTypes'] = $this->bizTypes;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypes'])) {
            $model->bizTypes = $map['BizTypes'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        return $model;
    }
}
