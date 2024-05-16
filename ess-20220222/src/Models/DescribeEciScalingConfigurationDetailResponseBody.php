<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration;
use AlibabaCloud\Tea\Model;

class DescribeEciScalingConfigurationDetailResponseBody extends Model
{
    /**
     * @description The YAML output of the scaling configuration.
     *
     * @example apiVersion: apps/v1
     * - containerPort: 80
     * @var string
     */
    public $output;

    /**
     * @description The request ID.
     *
     * @example 6EF9BFEE-FE07-4627-B8FB-14326FB9****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the scaling configuration.
     *
     * @var scalingConfiguration
     */
    public $scalingConfiguration;
    protected $_name = [
        'output'               => 'Output',
        'requestId'            => 'RequestId',
        'scalingConfiguration' => 'ScalingConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scalingConfiguration) {
            $res['ScalingConfiguration'] = null !== $this->scalingConfiguration ? $this->scalingConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEciScalingConfigurationDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScalingConfiguration'])) {
            $model->scalingConfiguration = scalingConfiguration::fromMap($map['ScalingConfiguration']);
        }

        return $model;
    }
}
