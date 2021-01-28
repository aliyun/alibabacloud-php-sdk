<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainTrafficDataResponseBody\trafficDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var float
     */
    public $staticHttpTraffic;

    /**
     * @var float
     */
    public $dynamicHttpsTraffic;

    /**
     * @var float
     */
    public $traffic;

    /**
     * @var float
     */
    public $dynamicHttpTraffic;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var float
     */
    public $staticHttpsTraffic;
    protected $_name = [
        'staticHttpTraffic'   => 'StaticHttpTraffic',
        'dynamicHttpsTraffic' => 'DynamicHttpsTraffic',
        'traffic'             => 'Traffic',
        'dynamicHttpTraffic'  => 'DynamicHttpTraffic',
        'timeStamp'           => 'TimeStamp',
        'staticHttpsTraffic'  => 'StaticHttpsTraffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->staticHttpTraffic) {
            $res['StaticHttpTraffic'] = $this->staticHttpTraffic;
        }
        if (null !== $this->dynamicHttpsTraffic) {
            $res['DynamicHttpsTraffic'] = $this->dynamicHttpsTraffic;
        }
        if (null !== $this->traffic) {
            $res['Traffic'] = $this->traffic;
        }
        if (null !== $this->dynamicHttpTraffic) {
            $res['DynamicHttpTraffic'] = $this->dynamicHttpTraffic;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->staticHttpsTraffic) {
            $res['StaticHttpsTraffic'] = $this->staticHttpsTraffic;
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
        if (isset($map['StaticHttpTraffic'])) {
            $model->staticHttpTraffic = $map['StaticHttpTraffic'];
        }
        if (isset($map['DynamicHttpsTraffic'])) {
            $model->dynamicHttpsTraffic = $map['DynamicHttpsTraffic'];
        }
        if (isset($map['Traffic'])) {
            $model->traffic = $map['Traffic'];
        }
        if (isset($map['DynamicHttpTraffic'])) {
            $model->dynamicHttpTraffic = $map['DynamicHttpTraffic'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['StaticHttpsTraffic'])) {
            $model->staticHttpsTraffic = $map['StaticHttpsTraffic'];
        }

        return $model;
    }
}
