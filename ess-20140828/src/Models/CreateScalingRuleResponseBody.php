<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models;

use AlibabaCloud\Tea\Model;

class CreateScalingRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $scalingRuleAri;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scalingRuleId;
    protected $_name = [
        'scalingRuleAri' => 'ScalingRuleAri',
        'requestId'      => 'RequestId',
        'scalingRuleId'  => 'ScalingRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scalingRuleAri) {
            $res['ScalingRuleAri'] = $this->scalingRuleAri;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scalingRuleId) {
            $res['ScalingRuleId'] = $this->scalingRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScalingRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScalingRuleAri'])) {
            $model->scalingRuleAri = $map['ScalingRuleAri'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScalingRuleId'])) {
            $model->scalingRuleId = $map['ScalingRuleId'];
        }

        return $model;
    }
}
