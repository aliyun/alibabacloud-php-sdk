<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyDeviceRiskStatisticsResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $dailyCallCount;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $deviceRiskRate;

    /**
     * @var string
     */
    public $identityRiskRate;
    protected $_name = [
        'dailyCallCount' => 'DailyCallCount',
        'date' => 'Date',
        'deviceRiskRate' => 'DeviceRiskRate',
        'identityRiskRate' => 'IdentityRiskRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyCallCount) {
            $res['DailyCallCount'] = $this->dailyCallCount;
        }

        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->deviceRiskRate) {
            $res['DeviceRiskRate'] = $this->deviceRiskRate;
        }

        if (null !== $this->identityRiskRate) {
            $res['IdentityRiskRate'] = $this->identityRiskRate;
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
        if (isset($map['DailyCallCount'])) {
            $model->dailyCallCount = $map['DailyCallCount'];
        }

        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['DeviceRiskRate'])) {
            $model->deviceRiskRate = $map['DeviceRiskRate'];
        }

        if (isset($map['IdentityRiskRate'])) {
            $model->identityRiskRate = $map['IdentityRiskRate'];
        }

        return $model;
    }
}
