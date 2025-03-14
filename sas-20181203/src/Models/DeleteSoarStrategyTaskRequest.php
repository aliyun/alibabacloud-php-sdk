<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteSoarStrategyTaskRequest extends Model
{
    /**
     * @description The ID of the policy task that is in the waiting state.
     *
     * >  You can call the [DescribeSoarStrategyTasks](~~DescribeSoarStrategyTasks~~) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 11082
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
     * @return DeleteSoarStrategyTaskRequest
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
