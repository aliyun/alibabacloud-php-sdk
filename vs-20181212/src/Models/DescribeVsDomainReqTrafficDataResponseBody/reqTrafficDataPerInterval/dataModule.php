<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainReqTrafficDataResponseBody\reqTrafficDataPerInterval;

use AlibabaCloud\Dara\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $reqTrafficValue;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'reqTrafficValue' => 'ReqTrafficValue',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reqTrafficValue) {
            $res['ReqTrafficValue'] = $this->reqTrafficValue;
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
        if (isset($map['ReqTrafficValue'])) {
            $model->reqTrafficValue = $map['ReqTrafficValue'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
