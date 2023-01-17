<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainTrafficDataResponseBody\trafficDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $httpTrafficValue;

    /**
     * @example 423304182
     *
     * @var string
     */
    public $httpsTrafficValue;

    /**
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @example 423304182
     *
     * @var string
     */
    public $trafficValue;
    protected $_name = [
        'httpTrafficValue'  => 'HttpTrafficValue',
        'httpsTrafficValue' => 'HttpsTrafficValue',
        'timeStamp'         => 'TimeStamp',
        'trafficValue'      => 'TrafficValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpTrafficValue) {
            $res['HttpTrafficValue'] = $this->httpTrafficValue;
        }
        if (null !== $this->httpsTrafficValue) {
            $res['HttpsTrafficValue'] = $this->httpsTrafficValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->trafficValue) {
            $res['TrafficValue'] = $this->trafficValue;
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
        if (isset($map['HttpTrafficValue'])) {
            $model->httpTrafficValue = $map['HttpTrafficValue'];
        }
        if (isset($map['HttpsTrafficValue'])) {
            $model->httpsTrafficValue = $map['HttpsTrafficValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['TrafficValue'])) {
            $model->trafficValue = $map['TrafficValue'];
        }

        return $model;
    }
}
