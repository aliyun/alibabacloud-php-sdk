<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarStrategyParamRequest extends Model
{
    /**
     * @description The ID of the policy.
     *
     * >  You can call the [DescribeSoarStrategies](~~DescribeSoarStrategies~~) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 15553
     *
     * @var int
     */
    public $strategyId;
    protected $_name = [
        'strategyId' => 'StrategyId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarStrategyParamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }

        return $model;
    }
}
