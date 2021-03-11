<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainReqBpsDataResponseBody\reqBpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $reqBpsValue;
    protected $_name = [
        'timeStamp'   => 'TimeStamp',
        'reqBpsValue' => 'ReqBpsValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->reqBpsValue) {
            $res['ReqBpsValue'] = $this->reqBpsValue;
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
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['ReqBpsValue'])) {
            $model->reqBpsValue = $map['ReqBpsValue'];
        }

        return $model;
    }
}
