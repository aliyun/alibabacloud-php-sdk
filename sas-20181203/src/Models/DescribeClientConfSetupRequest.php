<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeClientConfSetupRequest extends Model
{
    /**
     * @var string
     */
    public $strategyTag;
    /**
     * @var string
     */
    public $strategyTagValue;
    protected $_name = [
        'strategyTag'      => 'StrategyTag',
        'strategyTagValue' => 'StrategyTagValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->strategyTag) {
            $res['StrategyTag'] = $this->strategyTag;
        }

        if (null !== $this->strategyTagValue) {
            $res['StrategyTagValue'] = $this->strategyTagValue;
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
        if (isset($map['StrategyTag'])) {
            $model->strategyTag = $map['StrategyTag'];
        }

        if (isset($map['StrategyTagValue'])) {
            $model->strategyTagValue = $map['StrategyTagValue'];
        }

        return $model;
    }
}
