<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataResponseBody\httpCodeDataPerInterval;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataResponseBody\httpCodeDataPerInterval\dataModule\websocketHttpCode;
use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 2018-03-01T13:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @var websocketHttpCode
     */
    public $websocketHttpCode;
    protected $_name = [
        'timeStamp'         => 'TimeStamp',
        'websocketHttpCode' => 'WebsocketHttpCode',
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
        if (null !== $this->websocketHttpCode) {
            $res['WebsocketHttpCode'] = null !== $this->websocketHttpCode ? $this->websocketHttpCode->toMap() : null;
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
        if (isset($map['WebsocketHttpCode'])) {
            $model->websocketHttpCode = websocketHttpCode::fromMap($map['WebsocketHttpCode']);
        }

        return $model;
    }
}
