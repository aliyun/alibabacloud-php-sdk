<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketTrafficDataResponseBody\trafficDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The timestamp of the returned data.
     *
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The total volume of traffic.
     *
     * @example 423304182
     *
     * @var float
     */
    public $websocketTraffic;
    protected $_name = [
        'timeStamp'        => 'TimeStamp',
        'websocketTraffic' => 'WebsocketTraffic',
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
        if (null !== $this->websocketTraffic) {
            $res['WebsocketTraffic'] = $this->websocketTraffic;
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
        if (isset($map['WebsocketTraffic'])) {
            $model->websocketTraffic = $map['WebsocketTraffic'];
        }

        return $model;
    }
}
