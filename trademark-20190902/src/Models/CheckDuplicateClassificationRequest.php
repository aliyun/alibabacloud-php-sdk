<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class CheckDuplicateClassificationRequest extends Model
{
    /**
     * @example 350071,350005,350106,350085,350120,35030010,350096,350047,350001,35020035
     *
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
    public $trademarkName;
    protected $_name = [
        'classification' => 'Classification',
        'eventSceneType' => 'EventSceneType',
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
        if (null !== $this->trademarkName) {
            $res['TrademarkName'] = $this->trademarkName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDuplicateClassificationRequest
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
        if (isset($map['TrademarkName'])) {
            $model->trademarkName = $map['TrademarkName'];
        }

        return $model;
    }
}
