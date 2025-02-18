<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration;

class DescribeEciScalingConfigurationDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $output;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->scalingConfiguration) {
            $this->scalingConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scalingConfiguration) {
            $res['ScalingConfiguration'] = null !== $this->scalingConfiguration ? $this->scalingConfiguration->toArray($noStream) : $this->scalingConfiguration;
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
