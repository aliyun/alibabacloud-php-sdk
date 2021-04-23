<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPushBpsDataResponseBody\bpsDataPerInterval;

use AlibabaCloud\Tea\Model;

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
        'bpsValue'  => 'BpsValue',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return dataModule
     */
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
