<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainOriginBpsDataResponseBody\originBpsDataPerInterval;

use AlibabaCloud\Dara\Model;

class dataModule extends Model
{
    /**
     * @var float
     */
    public $dynamicHttpOriginBps;

    /**
     * @var float
     */
    public $dynamicHttpsOriginBps;

    /**
     * @var float
     */
    public $originBps;

    /**
     * @var float
     */
    public $staticHttpOriginBps;

    /**
     * @var float
     */
    public $staticHttpsOriginBps;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'dynamicHttpOriginBps' => 'DynamicHttpOriginBps',
        'dynamicHttpsOriginBps' => 'DynamicHttpsOriginBps',
        'originBps' => 'OriginBps',
        'staticHttpOriginBps' => 'StaticHttpOriginBps',
        'staticHttpsOriginBps' => 'StaticHttpsOriginBps',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicHttpOriginBps) {
            $res['DynamicHttpOriginBps'] = $this->dynamicHttpOriginBps;
        }

        if (null !== $this->dynamicHttpsOriginBps) {
            $res['DynamicHttpsOriginBps'] = $this->dynamicHttpsOriginBps;
        }

        if (null !== $this->originBps) {
            $res['OriginBps'] = $this->originBps;
        }

        if (null !== $this->staticHttpOriginBps) {
            $res['StaticHttpOriginBps'] = $this->staticHttpOriginBps;
        }

        if (null !== $this->staticHttpsOriginBps) {
            $res['StaticHttpsOriginBps'] = $this->staticHttpsOriginBps;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicHttpOriginBps'])) {
            $model->dynamicHttpOriginBps = $map['DynamicHttpOriginBps'];
        }

        if (isset($map['DynamicHttpsOriginBps'])) {
            $model->dynamicHttpsOriginBps = $map['DynamicHttpsOriginBps'];
        }

        if (isset($map['OriginBps'])) {
            $model->originBps = $map['OriginBps'];
        }

        if (isset($map['StaticHttpOriginBps'])) {
            $model->staticHttpOriginBps = $map['StaticHttpOriginBps'];
        }

        if (isset($map['StaticHttpsOriginBps'])) {
            $model->staticHttpsOriginBps = $map['StaticHttpsOriginBps'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
