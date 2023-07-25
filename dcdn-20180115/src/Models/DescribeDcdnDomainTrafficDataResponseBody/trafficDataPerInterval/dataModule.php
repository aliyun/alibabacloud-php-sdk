<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTrafficDataResponseBody\trafficDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The network traffic that was consumed to deliver dynamic content over HTTP.
     *
     * @example 0
     *
     * @var float
     */
    public $dynamicHttpTraffic;

    /**
     * @description The network traffic that was consumed to deliver dynamic content over HTTPS.
     *
     * @example 0
     *
     * @var float
     */
    public $dynamicHttpsTraffic;

    /**
     * @description The network traffic that was consumed to deliver static content over HTTP.
     *
     * @example 123
     *
     * @var float
     */
    public $staticHttpTraffic;

    /**
     * @description The network traffic that was consumed to deliver static content over HTTPS.
     *
     * @example 132
     *
     * @var float
     */
    public $staticHttpsTraffic;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The total amount of network traffic.
     *
     * @example 0
     *
     * @var float
     */
    public $traffic;
    protected $_name = [
        'dynamicHttpTraffic'  => 'DynamicHttpTraffic',
        'dynamicHttpsTraffic' => 'DynamicHttpsTraffic',
        'staticHttpTraffic'   => 'StaticHttpTraffic',
        'staticHttpsTraffic'  => 'StaticHttpsTraffic',
        'timeStamp'           => 'TimeStamp',
        'traffic'             => 'Traffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicHttpTraffic) {
            $res['DynamicHttpTraffic'] = $this->dynamicHttpTraffic;
        }
        if (null !== $this->dynamicHttpsTraffic) {
            $res['DynamicHttpsTraffic'] = $this->dynamicHttpsTraffic;
        }
        if (null !== $this->staticHttpTraffic) {
            $res['StaticHttpTraffic'] = $this->staticHttpTraffic;
        }
        if (null !== $this->staticHttpsTraffic) {
            $res['StaticHttpsTraffic'] = $this->staticHttpsTraffic;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
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
        if (isset($map['DynamicHttpTraffic'])) {
            $model->dynamicHttpTraffic = $map['DynamicHttpTraffic'];
        }
        if (isset($map['DynamicHttpsTraffic'])) {
            $model->dynamicHttpsTraffic = $map['DynamicHttpsTraffic'];
        }
        if (isset($map['StaticHttpTraffic'])) {
            $model->staticHttpTraffic = $map['StaticHttpTraffic'];
        }
        if (isset($map['StaticHttpsTraffic'])) {
            $model->staticHttpsTraffic = $map['StaticHttpsTraffic'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }

        return $model;
    }
}
