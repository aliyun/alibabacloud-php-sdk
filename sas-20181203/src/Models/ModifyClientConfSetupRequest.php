<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyClientConfSetupRequest extends Model
{
    /**
     * @example {
     * }
     * @var string
     */
    public $strategyConfig;

    /**
     * @example machineResource
     *
     * @var string
     */
    public $strategyTag;

    /**
     * @example major
     *
     * @var string
     */
    public $strategyTagValue;
    protected $_name = [
        'strategyConfig'   => 'StrategyConfig',
        'strategyTag'      => 'StrategyTag',
        'strategyTagValue' => 'StrategyTagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->strategyConfig) {
            $res['StrategyConfig'] = $this->strategyConfig;
        }
        if (null !== $this->strategyTag) {
            $res['StrategyTag'] = $this->strategyTag;
        }
        if (null !== $this->strategyTagValue) {
            $res['StrategyTagValue'] = $this->strategyTagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClientConfSetupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StrategyConfig'])) {
            $model->strategyConfig = $map['StrategyConfig'];
        }
        if (isset($map['StrategyTag'])) {
            $model->strategyTag = $map['StrategyTag'];
        }
        if (isset($map['StrategyTagValue'])) {
            $model->strategyTagValue = $map['StrategyTagValue'];
        }

        return $model;
    }
}
