<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifySoarStrategySubscribeRequest extends Model
{
    /**
     * @description The ID of the policy.
     *
     * >  You can call the [DescribeSoarStrategies](~~DescribeSoarStrategies~~) operation to obtain the ID.
     *
     * This parameter is required.
     *
     * @example 8000
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description Specifies whether to create the policy template. Valid values:
     *
     *   true: creates the policy template
     *   false: deletes the policy template
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $subscribeStatus;
    protected $_name = [
        'strategyId' => 'StrategyId',
        'subscribeStatus' => 'SubscribeStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->subscribeStatus) {
            $res['SubscribeStatus'] = $this->subscribeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySoarStrategySubscribeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['SubscribeStatus'])) {
            $model->subscribeStatus = $map['SubscribeStatus'];
        }

        return $model;
    }
}
