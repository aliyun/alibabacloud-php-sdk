<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeByteHitRateDataResponseBody\data;

use AlibabaCloud\Dara\Model;

class byteHitRateDataModel extends Model
{
    /**
     * @var float
     */
    public $byteHitRate;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'byteHitRate' => 'ByteHitRate',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->byteHitRate) {
            $res['ByteHitRate'] = $this->byteHitRate;
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
        if (isset($map['ByteHitRate'])) {
            $model->byteHitRate = $map['ByteHitRate'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
