<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckConfigResponseBody\standards;
use AlibabaCloud\Tea\Model;

class GetCheckConfigResponseBody extends Model
{
    /**
     * @description An array that consists of days in a week on which an automatic check is performed.
     *
     * @var int[]
     */
    public $cycleDays;

    /**
     * @description The end time of the check. The value indicates a point in time. The time period that is specified by the start time and end time must be one of the following time periods:
     *
     *   **00:00 to 06:00:** The StartTime parameter is set to 0 and the EndTime parameter is set to 6.
     *   **06:00 to 12:00**: The StartTime parameter is set to 6 and the EndTime parameter is set to 12.
     *   **12:00 to 18:00**: The StartTime parameter is set to 12 and the EndTime parameter is set to 18.
     *   **18:00 to 24:00:** The StartTime parameter is set to 18 and the EndTime parameter is set to 24.
     *
     * @example 6
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 5A3D5C8F-2A42-5477-BDD8-27E64B5F1739
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the information about the check items.
     *
     * @var standards[]
     */
    public $standards;

    /**
     * @description The start time of the check. The value indicates a point in time.
     *
     * @example 0
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'cycleDays' => 'CycleDays',
        'endTime'   => 'EndTime',
        'requestId' => 'RequestId',
        'standards' => 'Standards',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycleDays) {
            $res['CycleDays'] = $this->cycleDays;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->standards) {
            $res['Standards'] = [];
            if (null !== $this->standards && \is_array($this->standards)) {
                $n = 0;
                foreach ($this->standards as $item) {
                    $res['Standards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCheckConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CycleDays'])) {
            if (!empty($map['CycleDays'])) {
                $model->cycleDays = $map['CycleDays'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Standards'])) {
            if (!empty($map['Standards'])) {
                $model->standards = [];
                $n                = 0;
                foreach ($map['Standards'] as $item) {
                    $model->standards[$n++] = null !== $item ? standards::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
