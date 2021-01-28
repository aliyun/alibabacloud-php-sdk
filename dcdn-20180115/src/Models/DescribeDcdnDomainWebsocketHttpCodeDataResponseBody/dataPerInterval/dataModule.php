<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataResponseBody\dataPerInterval;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataResponseBody\dataPerInterval\dataModule\websocketHttpCodeDataPerInterval;
use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var websocketHttpCodeDataPerInterval
     */
    public $websocketHttpCodeDataPerInterval;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'websocketHttpCodeDataPerInterval' => 'WebsocketHttpCodeDataPerInterval',
        'timeStamp'                        => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->websocketHttpCodeDataPerInterval) {
            $res['WebsocketHttpCodeDataPerInterval'] = null !== $this->websocketHttpCodeDataPerInterval ? $this->websocketHttpCodeDataPerInterval->toMap() : null;
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
        if (isset($map['WebsocketHttpCodeDataPerInterval'])) {
            $model->websocketHttpCodeDataPerInterval = websocketHttpCodeDataPerInterval::fromMap($map['WebsocketHttpCodeDataPerInterval']);
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
