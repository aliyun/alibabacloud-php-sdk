<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainUsageDataResponseBody\usageDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $peakTime;

    /**
     * @var string
     */
    public $specialValue;
    protected $_name = [
        'value'        => 'Value',
        'timeStamp'    => 'TimeStamp',
        'peakTime'     => 'PeakTime',
        'specialValue' => 'SpecialValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->peakTime) {
            $res['PeakTime'] = $this->peakTime;
        }
        if (null !== $this->specialValue) {
            $res['SpecialValue'] = $this->specialValue;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['PeakTime'])) {
            $model->peakTime = $map['PeakTime'];
        }
        if (isset($map['SpecialValue'])) {
            $model->specialValue = $map['SpecialValue'];
        }

        return $model;
    }
}
