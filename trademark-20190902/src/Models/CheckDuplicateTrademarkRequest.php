<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class CheckDuplicateTrademarkRequest extends Model
{
    /**
     * @var string
     */
    public $classification;

    /**
     * @var int
     */
    public $eventSceneType;

    /**
     * @var string
     */
    public $materialName;

    /**
     * @var string
     */
    public $trademarkName;
    protected $_name = [
        'classification' => 'Classification',
        'eventSceneType' => 'EventSceneType',
        'materialName'   => 'MaterialName',
        'trademarkName'  => 'TrademarkName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->eventSceneType) {
            $res['EventSceneType'] = $this->eventSceneType;
        }
        if (null !== $this->materialName) {
            $res['MaterialName'] = $this->materialName;
        }
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDuplicateTrademarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['EventSceneType'])) {
            $model->eventSceneType = $map['EventSceneType'];
        }
        if (isset($map['MaterialName'])) {
            $model->materialName = $map['MaterialName'];
        }
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }

        return $model;
    }
}
