<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetOpaStrategyDetailNewRequest extends Model
{
    /**
     * @example 1349
     *
     * @var int
     */
    public $strategyId;
    protected $_name = [
        'strategyId' => 'StrategyId',
    ];

    public function validate()
    {
    }

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
     * @return GetOpaStrategyDetailNewRequest
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
