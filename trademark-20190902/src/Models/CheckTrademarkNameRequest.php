<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class CheckTrademarkNameRequest extends Model
{
    /**
     * @var int
     */
    public $eventSceneType;

    /**
     * @var string
     */
    public $trademarkName;
    protected $_name = [
        'eventSceneType' => 'EventSceneType',
        'trademarkName'  => 'TrademarkName',
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
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckTrademarkNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventSceneType'])) {
            $model->eventSceneType = $map['EventSceneType'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }

        return $model;
    }
}
