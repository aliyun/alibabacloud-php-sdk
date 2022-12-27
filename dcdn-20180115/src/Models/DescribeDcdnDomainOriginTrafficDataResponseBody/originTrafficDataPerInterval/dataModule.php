<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainOriginTrafficDataResponseBody\originTrafficDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 1000
     *
     * @var float
     */
    public $dynamicHttpOriginTraffic;

    /**
     * @example 500
     *
     * @var float
     */
    public $dynamicHttpsOriginTraffic;

    /**
     * @example 100
     *
     * @var float
     */
    public $originTraffic;

    /**
     * @example 0
     *
     * @var float
     */
    public $staticHttpOriginTraffic;

    /**
     * @example 100
     *
     * @var float
     */
    public $staticHttpsOriginTraffic;

    /**
     * @example 2017-12-10T21:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'dynamicHttpOriginTraffic'  => 'DynamicHttpOriginTraffic',
        'dynamicHttpsOriginTraffic' => 'DynamicHttpsOriginTraffic',
        'originTraffic'             => 'OriginTraffic',
        'staticHttpOriginTraffic'   => 'StaticHttpOriginTraffic',
        'staticHttpsOriginTraffic'  => 'StaticHttpsOriginTraffic',
        'timeStamp'                 => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicHttpOriginTraffic) {
            $res['DynamicHttpOriginTraffic'] = $this->dynamicHttpOriginTraffic;
        }
        if (null !== $this->dynamicHttpsOriginTraffic) {
            $res['DynamicHttpsOriginTraffic'] = $this->dynamicHttpsOriginTraffic;
        }
        if (null !== $this->originTraffic) {
            $res['OriginTraffic'] = $this->originTraffic;
        }
        if (null !== $this->staticHttpOriginTraffic) {
            $res['StaticHttpOriginTraffic'] = $this->staticHttpOriginTraffic;
        }
        if (null !== $this->staticHttpsOriginTraffic) {
            $res['StaticHttpsOriginTraffic'] = $this->staticHttpsOriginTraffic;
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
        if (isset($map['DynamicHttpOriginTraffic'])) {
            $model->dynamicHttpOriginTraffic = $map['DynamicHttpOriginTraffic'];
        }
        if (isset($map['DynamicHttpsOriginTraffic'])) {
            $model->dynamicHttpsOriginTraffic = $map['DynamicHttpsOriginTraffic'];
        }
        if (isset($map['OriginTraffic'])) {
            $model->originTraffic = $map['OriginTraffic'];
        }
        if (isset($map['StaticHttpOriginTraffic'])) {
            $model->staticHttpOriginTraffic = $map['StaticHttpOriginTraffic'];
        }
        if (isset($map['StaticHttpsOriginTraffic'])) {
            $model->staticHttpsOriginTraffic = $map['StaticHttpsOriginTraffic'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
