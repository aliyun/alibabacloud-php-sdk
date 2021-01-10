<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTrafficDataResponseBody\trafficDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $trafficValue;

    /**
     * @var string
     */
    public $httpTrafficValue;

    /**
     * @var string
     */
    public $httpsTrafficValue;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'trafficValue'      => 'TrafficValue',
        'httpTrafficValue'  => 'HttpTrafficValue',
        'httpsTrafficValue' => 'HttpsTrafficValue',
        'timeStamp'         => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficValue) {
            $res['TrafficValue'] = $this->trafficValue;
        }
        if (null !== $this->httpTrafficValue) {
            $res['HttpTrafficValue'] = $this->httpTrafficValue;
        }
        if (null !== $this->httpsTrafficValue) {
            $res['HttpsTrafficValue'] = $this->httpsTrafficValue;
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
        if (isset($map['TrafficValue'])) {
            $model->trafficValue = $map['TrafficValue'];
        }
        if (isset($map['HttpTrafficValue'])) {
            $model->httpTrafficValue = $map['HttpTrafficValue'];
        }
        if (isset($map['HttpsTrafficValue'])) {
            $model->httpsTrafficValue = $map['HttpsTrafficValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
