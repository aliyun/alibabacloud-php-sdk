<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody\trafficPerInterval;

use AlibabaCloud\Tea\Model;

class trafficDataModule extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  The end time must be later than the start time.
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 11288111.1
     *
     * @var float
     */
    public $bps;

    /**
     * @description > *   If you do not set StartTime or EndTime, data collected within the last 10 minutes is queried.
     *   The maximum time range between StartTime and EndTime can be 1 hour.
     *   You can query data within the last 90 days.
     *   You can query the amount of data transfer and the number of requests for accelerated domain names that have been already removed from Alibaba Cloud CDN.
     *   The maximum number of times that each user can call this operation per second is 50.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The bandwidth. Unit: bit/s.
     *
     * @example DynamicHttp
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'area'      => 'Area',
        'bps'       => 'Bps',
        'domain'    => 'Domain',
        'timeStamp' => 'TimeStamp',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficDataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
