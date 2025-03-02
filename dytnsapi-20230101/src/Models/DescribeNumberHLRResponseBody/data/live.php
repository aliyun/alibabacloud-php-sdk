<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20230101\Models\DescribeNumberHLRResponseBody\data;

use AlibabaCloud\Dara\Model;

class live extends Model
{
    /**
     * @var string
     */
    public $deviceStatus;
    /**
     * @var string
     */
    public $roaming;
    /**
     * @var string
     */
    public $roamingCountry;
    /**
     * @var string
     */
    public $subscriberStatus;
    protected $_name = [
        'deviceStatus'     => 'DeviceStatus',
        'roaming'          => 'Roaming',
        'roamingCountry'   => 'RoamingCountry',
        'subscriberStatus' => 'SubscriberStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceStatus) {
            $res['DeviceStatus'] = $this->deviceStatus;
        }

        if (null !== $this->roaming) {
            $res['Roaming'] = $this->roaming;
        }

        if (null !== $this->roamingCountry) {
            $res['RoamingCountry'] = $this->roamingCountry;
        }

        if (null !== $this->subscriberStatus) {
            $res['SubscriberStatus'] = $this->subscriberStatus;
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
        if (isset($map['DeviceStatus'])) {
            $model->deviceStatus = $map['DeviceStatus'];
        }

        if (isset($map['Roaming'])) {
            $model->roaming = $map['Roaming'];
        }

        if (isset($map['RoamingCountry'])) {
            $model->roamingCountry = $map['RoamingCountry'];
        }

        if (isset($map['SubscriberStatus'])) {
            $model->subscriberStatus = $map['SubscriberStatus'];
        }

        return $model;
    }
}
