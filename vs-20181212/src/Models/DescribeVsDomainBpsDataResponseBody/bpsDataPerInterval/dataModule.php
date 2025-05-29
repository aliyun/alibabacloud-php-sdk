<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainBpsDataResponseBody\bpsDataPerInterval;

use AlibabaCloud\Dara\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $bpsValue;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'bpsValue' => 'BpsValue',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bpsValue) {
            $res['BpsValue'] = $this->bpsValue;
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
        if (isset($map['BpsValue'])) {
            $model->bpsValue = $map['BpsValue'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
