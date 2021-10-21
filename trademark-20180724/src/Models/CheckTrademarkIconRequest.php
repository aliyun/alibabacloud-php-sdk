<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CheckTrademarkIconRequest extends Model
{
    /**
     * @var string
     */
    public $trademarkIconOssKey;

    /**
     * @var int
     */
    public $eventSceneType;
    protected $_name = [
        'trademarkIconOssKey' => 'TrademarkIconOssKey',
        'eventSceneType'      => 'EventSceneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trademarkIconOssKey) {
            $res['TrademarkIconOssKey'] = $this->trademarkIconOssKey;
        }
        if (null !== $this->eventSceneType) {
            $res['EventSceneType'] = $this->eventSceneType;
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
        if (isset($map['TrademarkIconOssKey'])) {
            $model->trademarkIconOssKey = $map['TrademarkIconOssKey'];
        }
        if (isset($map['EventSceneType'])) {
            $model->eventSceneType = $map['EventSceneType'];
        }

        return $model;
    }
}
