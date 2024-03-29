<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSlaEventListResponseBody;

use AlibabaCloud\Tea\Model;

class slaEvent extends Model
{
    /**
     * @description The end of the time range. Unit: seconds.
     *
     * @example 1671886740
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The IP address of the instance.
     *
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The region to which the destination IP address belongs. Valid values:
     *
     *   **cn**: a region in the Chinese mainland
     *   **cn-hongkong**: China (Hong Kong)
     *
     * @example cn
     *
     * @var string
     */
    public $region;

    /**
     * @description The beginning of the time range. Unit: seconds.
     *
     * @example 1678080840
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'ip'        => 'Ip',
        'region'    => 'Region',
        'startTime' => 'StartTime',
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
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slaEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
