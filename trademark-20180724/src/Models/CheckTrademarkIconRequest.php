<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CheckTrademarkIconRequest extends Model
{
    /**
     * @var int
     */
    public $eventSceneType;

    /**
     * @var string
     */
    public $trademarkIconOssKey;
    protected $_name = [
        'eventSceneType'      => 'EventSceneType',
        'trademarkIconOssKey' => 'TrademarkIconOssKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventSceneType) {
            $res['EventSceneType'] = $this->eventSceneType;
        }
        if (null !== $this->trademarkIconOssKey) {
            $res['TrademarkIconOssKey'] = $this->trademarkIconOssKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckTrademarkIconRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventSceneType'])) {
            $model->eventSceneType = $map['EventSceneType'];
        }
        if (isset($map['TrademarkIconOssKey'])) {
            $model->trademarkIconOssKey = $map['TrademarkIconOssKey'];
        }

        return $model;
    }
}
