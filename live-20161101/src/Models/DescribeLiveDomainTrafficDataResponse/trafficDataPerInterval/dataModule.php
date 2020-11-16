<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTrafficDataResponse\trafficDataPerInterval;

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
    public $trafficValue;

    /**
     * @var string
     */
    public $httpTrafficValue;

    /**
     * @var string
     */
    public $httpsTrafficValue;
    protected $_name = [
        'timeStamp'         => 'TimeStamp',
        'trafficValue'      => 'TrafficValue',
        'httpTrafficValue'  => 'HttpTrafficValue',
        'httpsTrafficValue' => 'HttpsTrafficValue',
    ];

    public function validate()
    {
        Model::validateRequired('timeStamp', $this->timeStamp, true);
        Model::validateRequired('trafficValue', $this->trafficValue, true);
        Model::validateRequired('httpTrafficValue', $this->httpTrafficValue, true);
        Model::validateRequired('httpsTrafficValue', $this->httpsTrafficValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->trafficValue) {
            $res['TrafficValue'] = $this->trafficValue;
        }
        if (null !== $this->httpTrafficValue) {
            $res['HttpTrafficValue'] = $this->httpTrafficValue;
        }
        if (null !== $this->httpsTrafficValue) {
            $res['HttpsTrafficValue'] = $this->httpsTrafficValue;
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
        if (isset($map['TrafficValue'])) {
            $model->trafficValue = $map['TrafficValue'];
        }
        if (isset($map['HttpTrafficValue'])) {
            $model->httpTrafficValue = $map['HttpTrafficValue'];
        }
        if (isset($map['HttpsTrafficValue'])) {
            $model->httpsTrafficValue = $map['HttpsTrafficValue'];
        }

        return $model;
    }
}
