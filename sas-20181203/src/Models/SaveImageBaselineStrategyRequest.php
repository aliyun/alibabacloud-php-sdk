<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SaveImageBaselineStrategyRequest extends Model
{
    /**
     * @example ak_leak
     *
     * @var string
     */
    public $baselineItemList;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 8639
     *
     * @var int
     */
    public $strategyId;

    /**
     * @example default
     *
     * @var string
     */
    public $strategyName;
    protected $_name = [
        'baselineItemList' => 'BaselineItemList',
        'lang'             => 'Lang',
        'strategyId'       => 'StrategyId',
        'strategyName'     => 'StrategyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineItemList) {
            $res['BaselineItemList'] = $this->baselineItemList;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveImageBaselineStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineItemList'])) {
            $model->baselineItemList = $map['BaselineItemList'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }

        return $model;
    }
}
