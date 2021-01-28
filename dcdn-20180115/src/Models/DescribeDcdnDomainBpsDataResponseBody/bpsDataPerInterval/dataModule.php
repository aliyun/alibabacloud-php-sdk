<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainBpsDataResponseBody\bpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var float
     */
    public $staticHttpsBps;

    /**
     * @var float
     */
    public $bps;

    /**
     * @var float
     */
    public $dynamicHttpsBps;

    /**
     * @var float
     */
    public $dynamicHttpBps;

    /**
     * @var float
     */
    public $staticHttpBps;
    protected $_name = [
        'timeStamp'       => 'TimeStamp',
        'staticHttpsBps'  => 'StaticHttpsBps',
        'bps'             => 'Bps',
        'dynamicHttpsBps' => 'DynamicHttpsBps',
        'dynamicHttpBps'  => 'DynamicHttpBps',
        'staticHttpBps'   => 'StaticHttpBps',
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
        if (null !== $this->staticHttpsBps) {
            $res['StaticHttpsBps'] = $this->staticHttpsBps;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->dynamicHttpsBps) {
            $res['DynamicHttpsBps'] = $this->dynamicHttpsBps;
        }
        if (null !== $this->dynamicHttpBps) {
            $res['DynamicHttpBps'] = $this->dynamicHttpBps;
        }
        if (null !== $this->staticHttpBps) {
            $res['StaticHttpBps'] = $this->staticHttpBps;
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
        if (isset($map['StaticHttpsBps'])) {
            $model->staticHttpsBps = $map['StaticHttpsBps'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['DynamicHttpsBps'])) {
            $model->dynamicHttpsBps = $map['DynamicHttpsBps'];
        }
        if (isset($map['DynamicHttpBps'])) {
            $model->dynamicHttpBps = $map['DynamicHttpBps'];
        }
        if (isset($map['StaticHttpBps'])) {
            $model->staticHttpBps = $map['StaticHttpBps'];
        }

        return $model;
    }
}
