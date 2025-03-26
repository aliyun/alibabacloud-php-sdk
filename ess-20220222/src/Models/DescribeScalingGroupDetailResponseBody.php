<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupDetailResponseBody\scalingGroup;

class DescribeScalingGroupDetailResponseBody extends Model
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
     * @var scalingGroup
     */
    public $scalingGroup;
    protected $_name = [
        'output' => 'Output',
        'requestId' => 'RequestId',
        'scalingGroup' => 'ScalingGroup',
    ];

    public function validate()
    {
        if (null !== $this->scalingGroup) {
            $this->scalingGroup->validate();
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

        if (null !== $this->scalingGroup) {
            $res['ScalingGroup'] = null !== $this->scalingGroup ? $this->scalingGroup->toArray($noStream) : $this->scalingGroup;
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

        if (isset($map['ScalingGroup'])) {
            $model->scalingGroup = scalingGroup::fromMap($map['ScalingGroup']);
        }

        return $model;
    }
}
