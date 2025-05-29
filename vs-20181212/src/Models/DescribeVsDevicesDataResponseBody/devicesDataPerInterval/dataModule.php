<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDevicesDataResponseBody\devicesDataPerInterval;

use AlibabaCloud\Dara\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $devicesDataValue;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'devicesDataValue' => 'DevicesDataValue',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devicesDataValue) {
            $res['DevicesDataValue'] = $this->devicesDataValue;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['DevicesDataValue'])) {
            $model->devicesDataValue = $map['DevicesDataValue'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
