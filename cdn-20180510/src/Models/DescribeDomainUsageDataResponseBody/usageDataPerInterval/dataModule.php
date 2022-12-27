<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainUsageDataResponseBody\usageDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description If the **Field** parameter in the request is set to **bps**, this parameter returns the time of the peak bandwidth value. Otherwise, this parameter returns the same value as the **TimeStamp** parameter.
     *
     * @example 2015-12-10T21:30:00Z
     *
     * @var string
     */
    public $peakTime;

    /**
     * @description The data usage in a specific scenario.
     *
     * >  Indicates the data usage in a specific scenario. If no special billable item is specified, ignore this parameter.
     * @example 423304182
     *
     * @var string
     */
    public $specialValue;

    /**
     * @description The timestamp of the data returned.
     *
     * >  The **TimeStamp** parameter may return multiple values.
     * @example 2015-12-10T21:30:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The usage.
     *
     * >  Usage data includes network traffic (measured in bytes), bandwidth values (measured in bits/s), and the number of requests.
     * @example 423304182
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'peakTime'     => 'PeakTime',
        'specialValue' => 'SpecialValue',
        'timeStamp'    => 'TimeStamp',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->peakTime) {
            $res['PeakTime'] = $this->peakTime;
        }
        if (null !== $this->specialValue) {
            $res['SpecialValue'] = $this->specialValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeakTime'])) {
            $model->peakTime = $map['PeakTime'];
        }
        if (isset($map['SpecialValue'])) {
            $model->specialValue = $map['SpecialValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
