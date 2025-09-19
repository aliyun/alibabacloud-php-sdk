<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifySoarStrategySubscribeRequest extends Model
{
    /**
     * @var int
     */
    public $strategyId;

    /**
     * @var bool
     */
    public $subscribeStatus;
    protected $_name = [
        'strategyId' => 'StrategyId',
        'subscribeStatus' => 'SubscribeStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
