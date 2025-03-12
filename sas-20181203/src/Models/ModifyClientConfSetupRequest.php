<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyClientConfSetupRequest extends Model
{
    /**
     * @description The configurations of the Security Center agent.
     *
     *   cpu: the maximum CPU utilization that can be occupied by the Security Center agent on the server
     *   mem: the maximum memory usage that can be occupied by the Security Center agent on the server
     *
     * @example {
     * }
     * @var string
     */
    public $strategyConfig;

    /**
     * @description The type of the tag.
     *
     * This parameter is required.
     * @example machineResource
     *
     * @var string
     */
    public $strategyTag;

    /**
     * @description The value of the tag. Valid values:
     *
     *   major
     *   advanced
     *   basic
     *
     * This parameter is required.
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
