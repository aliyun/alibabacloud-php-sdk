<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainOriginTrafficDataResponseBody\originTrafficDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var float
     */
    public $dynamicHttpOriginTraffic;

    /**
     * @var float
     */
    public $staticHttpsOriginTraffic;

    /**
     * @var float
     */
    public $originTraffic;

    /**
     * @var float
     */
    public $staticHttpOriginTraffic;

    /**
     * @var float
     */
    public $dynamicHttpsOriginTraffic;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'dynamicHttpOriginTraffic'  => 'DynamicHttpOriginTraffic',
        'staticHttpsOriginTraffic'  => 'StaticHttpsOriginTraffic',
        'originTraffic'             => 'OriginTraffic',
        'staticHttpOriginTraffic'   => 'StaticHttpOriginTraffic',
        'dynamicHttpsOriginTraffic' => 'DynamicHttpsOriginTraffic',
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
        if (null !== $this->staticHttpsOriginTraffic) {
            $res['StaticHttpsOriginTraffic'] = $this->staticHttpsOriginTraffic;
        }
        if (null !== $this->originTraffic) {
            $res['OriginTraffic'] = $this->originTraffic;
        }
        if (null !== $this->staticHttpOriginTraffic) {
            $res['StaticHttpOriginTraffic'] = $this->staticHttpOriginTraffic;
        }
        if (null !== $this->dynamicHttpsOriginTraffic) {
            $res['DynamicHttpsOriginTraffic'] = $this->dynamicHttpsOriginTraffic;
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
        if (isset($map['StaticHttpsOriginTraffic'])) {
            $model->staticHttpsOriginTraffic = $map['StaticHttpsOriginTraffic'];
        }
        if (isset($map['OriginTraffic'])) {
            $model->originTraffic = $map['OriginTraffic'];
        }
        if (isset($map['StaticHttpOriginTraffic'])) {
            $model->staticHttpOriginTraffic = $map['StaticHttpOriginTraffic'];
        }
        if (isset($map['DynamicHttpsOriginTraffic'])) {
            $model->dynamicHttpsOriginTraffic = $map['DynamicHttpsOriginTraffic'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
