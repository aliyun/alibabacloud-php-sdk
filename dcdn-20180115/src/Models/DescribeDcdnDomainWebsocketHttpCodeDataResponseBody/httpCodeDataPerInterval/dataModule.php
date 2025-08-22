<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataResponseBody\httpCodeDataPerInterval;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainWebsocketHttpCodeDataResponseBody\httpCodeDataPerInterval\dataModule\websocketHttpCode;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var websocketHttpCode
     */
    public $websocketHttpCode;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'websocketHttpCode' => 'WebsocketHttpCode',
    ];

    public function validate()
    {
        if (null !== $this->websocketHttpCode) {
            $this->websocketHttpCode->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        if (null !== $this->websocketHttpCode) {
            $res['WebsocketHttpCode'] = null !== $this->websocketHttpCode ? $this->websocketHttpCode->toArray($noStream) : $this->websocketHttpCode;
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
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        if (isset($map['WebsocketHttpCode'])) {
            $model->websocketHttpCode = websocketHttpCode::fromMap($map['WebsocketHttpCode']);
        }

        return $model;
    }
}
