<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeStrategyTargetRequest extends Model
{
    /**
     * @description The ID of the baseline check policy.
     *
     * @example {"strategyId":8167126}
     *
     * @var string
     */
    public $config;

    /**
     * @description The source IP address of the request.
     *
     * @example 1.2.X.X
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the policy. Set the value to hc_strategy, which indicates baseline check policies.
     *
     * @example hc_strategy
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config'   => 'Config',
        'sourceIp' => 'SourceIp',
        'type'     => 'Type',
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStrategyTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
