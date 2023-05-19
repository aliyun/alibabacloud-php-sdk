<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcHttpCodeDataResponseBody\realTimeSrcHttpCodeData;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeSrcHttpCodeDataResponseBody\realTimeSrcHttpCodeData\usageData\value;
use AlibabaCloud\Tea\Model;

class usageData extends Model
{
    /**
     * @description The number of HTTP status codes.
     *
     * @example 2019-11-30T05:40:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description - You can call this operation up to 10 times per second per account.
     * - If you do not set the StartTime or EndTime parameter, data collected over the last one hour is queried. If you set both the StartTime and EndTime parameters, data collected within the specified time range is queried.
     *
     **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *
     * | 1 hour | 31 days | 186 days | 4 hours |
     * @var value
     */
    public $value;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->value) {
            $res['Value'] = null !== $this->value ? $this->value->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Value'])) {
            $model->value = value::fromMap($map['Value']);
        }

        return $model;
    }
}
