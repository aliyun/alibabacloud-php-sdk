<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClientConfSetupResponseBody;

use AlibabaCloud\Tea\Model;

class clientConf extends Model
{
    /**
     * @description The configurations of the usage for the Security Center agent.
     *
     * @example {"mem":"200","cpu":"10","cpu_all":"0"}
     *
     * @var string
     */
    public $config;

    /**
     * @description The tag that is added to the configuration.
     *
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
     * @example major
     *
     * @var string
     */
    public $strategyTagValue;
    protected $_name = [
        'config'           => 'Config',
        'strategyTag'      => 'StrategyTag',
        'strategyTagValue' => 'StrategyTagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
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
     * @return clientConf
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
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
