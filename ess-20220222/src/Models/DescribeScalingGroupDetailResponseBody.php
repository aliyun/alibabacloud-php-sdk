<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupDetailResponseBody\scalingGroup;
use AlibabaCloud\Tea\Model;

class DescribeScalingGroupDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $output;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scalingGroup
     */
    public $scalingGroup;
    protected $_name = [
        'output'       => 'Output',
        'requestId'    => 'RequestId',
        'scalingGroup' => 'ScalingGroup',
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
        if (null !== $this->scalingGroup) {
            $res['ScalingGroup'] = null !== $this->scalingGroup ? $this->scalingGroup->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScalingGroupDetailResponseBody
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
        if (isset($map['ScalingGroup'])) {
            $model->scalingGroup = scalingGroup::fromMap($map['ScalingGroup']);
        }

        return $model;
    }
}
