<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainRealTimeReqHitRateDataResponseBody\data;

use AlibabaCloud\Dara\Model;

class reqHitRateDataModel extends Model
{
    /**
     * @var float
     */
    public $reqHitRate;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'reqHitRate' => 'ReqHitRate',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reqHitRate) {
            $res['ReqHitRate'] = $this->reqHitRate;
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
        if (isset($map['ReqHitRate'])) {
            $model->reqHitRate = $map['ReqHitRate'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
