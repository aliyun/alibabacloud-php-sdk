<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketBpsDataResponseBody\bpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @example 11288111
     *
     * @var float
     */
    public $websocketBps;
    protected $_name = [
        'timeStamp'    => 'TimeStamp',
        'websocketBps' => 'WebsocketBps',
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
        if (null !== $this->websocketBps) {
            $res['WebsocketBps'] = $this->websocketBps;
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
        if (isset($map['WebsocketBps'])) {
            $model->websocketBps = $map['WebsocketBps'];
        }

        return $model;
    }
}
