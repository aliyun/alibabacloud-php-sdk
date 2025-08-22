<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainUsageDataResponseBody\usageDataPerInterval;

use AlibabaCloud\Dara\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $peakTime;

    /**
     * @var string
     */
    public $specialValue;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'peakTime' => 'PeakTime',
        'specialValue' => 'SpecialValue',
        'timeStamp' => 'TimeStamp',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
