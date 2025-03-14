<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarStrategyTaskParamsRequest extends Model
{
    /**
     * @description Strategy task ID.
     * > You can obtain this parameter by calling the [DescribeSoarStrategyTasks](~~DescribeSoarStrategyTasks~~) interface.
     *
     * @example 100
     *
     * @var int
     */
    public $strategyTaskId;
    protected $_name = [
        'strategyTaskId' => 'StrategyTaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->strategyTaskId) {
            $res['StrategyTaskId'] = $this->strategyTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarStrategyTaskParamsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StrategyTaskId'])) {
            $model->strategyTaskId = $map['StrategyTaskId'];
        }

        return $model;
    }
}
