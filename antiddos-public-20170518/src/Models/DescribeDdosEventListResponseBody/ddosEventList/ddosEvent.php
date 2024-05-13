<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosEventListResponseBody\ddosEventList;

use AlibabaCloud\Tea\Model;

class ddosEvent extends Model
{
    /**
     * @description The status of the DDoS attack event. Valid values:
     *
     *   **mitigating**: indicates that traffic scrubbing is in progress.
     *   **blackholed**: indicates that blackhole filtering is triggered for the asset.
     *   **normal**: indicates that the DDoS attack event ends.
     *
     * @example normal
     *
     * @var string
     */
    public $ddosStatus;

    /**
     * @description The type of the DDoS attack event. Valid values:
     *
     *   **defense**: an attack event that triggers traffic scrubbing
     *   **blackhole**: an attack event that triggers blackhole filtering
     *
     * @example blackhole
     *
     * @var string
     */
    public $ddosType;

    /**
     * @description The time of the last attack. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * > This parameter is returned only when the asset is attacked multiple times within a DDoS attack event.
     * @example 1637817679000
     *
     * @var int
     */
    public $delayTime;

    /**
     * @description The end time of the DDoS attack event. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1637817679000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The start time of the DDoS attack event. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1637812279000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The time when blackhole filtering is deactivated. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * > This parameter is returned only when the value of the **DdosType** parameter is **blackhole**.
     * @example 1637814079000
     *
     * @var int
     */
    public $unBlackholeTime;
    protected $_name = [
        'ddosStatus'      => 'DdosStatus',
        'ddosType'        => 'DdosType',
        'delayTime'       => 'DelayTime',
        'endTime'         => 'EndTime',
        'startTime'       => 'StartTime',
        'unBlackholeTime' => 'UnBlackholeTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddosStatus) {
            $res['DdosStatus'] = $this->ddosStatus;
        }
        if (null !== $this->ddosType) {
            $res['DdosType'] = $this->ddosType;
        }
        if (null !== $this->delayTime) {
            $res['DelayTime'] = $this->delayTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->unBlackholeTime) {
            $res['UnBlackholeTime'] = $this->unBlackholeTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ddosEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdosStatus'])) {
            $model->ddosStatus = $map['DdosStatus'];
        }
        if (isset($map['DdosType'])) {
            $model->ddosType = $map['DdosType'];
        }
        if (isset($map['DelayTime'])) {
            $model->delayTime = $map['DelayTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UnBlackholeTime'])) {
            $model->unBlackholeTime = $map['UnBlackholeTime'];
        }

        return $model;
    }
}
