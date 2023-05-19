<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeQpsDataResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainRealTimeQpsDataResponseBody extends Model
{
    /**
     * @description The accelerated domain name. Separate multiple accelerated domain names with commas (,).
     *
     * @var data
     */
    public $data;

    /**
     * @description - You can call this operation up to 10 times per second per account.
     * - If you do not set the StartTime or EndTime parameter, the request returns the data collected in the last hour. If you set both the StartTime and EndTime parameters, the request returns the data collected within the specified time range.
     *
     **Time granularity**The time granularity varies with the time range specified by the StartTime and EndTime parameters. The following table describes the time period within which historical data is available and the data delay.
     *
     * | 1 hour | 31 days | 186 days | 4 hours |
     * @example 32DC9806-E9F9-4490-BBDC-B3A9E32FCC1D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainRealTimeQpsDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
