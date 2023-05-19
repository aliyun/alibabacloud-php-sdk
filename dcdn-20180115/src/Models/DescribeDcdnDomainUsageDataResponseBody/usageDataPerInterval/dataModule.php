<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainUsageDataResponseBody\usageDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The time interval between the data entries. Unit: seconds.
     *
     * @example 2015-12-10T21:30:00Z
     *
     * @var string
     */
    public $peakTime;

    /**
     * @description The network traffic that was collected at each interval.
     *
     * @example 4233041**
     *
     * @var string
     */
    public $specialValue;

    /**
     * @description The ID of the request.
     *
     * @example 2015-12-10T21:30:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description data.content
     *
     * @example 4233041**
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
