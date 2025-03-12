<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeClientConfSetupRequest extends Model
{
    /**
     * @description The tag that is added to the server.
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
        'strategyTag'      => 'StrategyTag',
        'strategyTagValue' => 'StrategyTagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeClientConfSetupRequest
     */
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
