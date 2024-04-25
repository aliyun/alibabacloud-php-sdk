<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainReqHitRateDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 50
     *
     * @var string
     */
    public $httpsValue;

    /**
     * @example 2023-12-21T08:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @example 100
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'httpsValue' => 'HttpsValue',
        'timeStamp'  => 'TimeStamp',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpsValue) {
            $res['HttpsValue'] = $this->httpsValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['HttpsValue'])) {
            $model->httpsValue = $map['HttpsValue'];
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
