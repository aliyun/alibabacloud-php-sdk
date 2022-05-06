<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupsResponseBody\parameterGroups;
use AlibabaCloud\Tea\Model;

class DescribeParameterGroupsResponseBody extends Model
{
    /**
     * @var parameterGroups
     */
    public $parameterGroups;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $signalForOptimizeParams;
    protected $_name = [
        'parameterGroups'         => 'ParameterGroups',
        'requestId'               => 'RequestId',
        'signalForOptimizeParams' => 'SignalForOptimizeParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterGroups) {
            $res['ParameterGroups'] = null !== $this->parameterGroups ? $this->parameterGroups->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signalForOptimizeParams) {
            $res['SignalForOptimizeParams'] = $this->signalForOptimizeParams;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParameterGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterGroups'])) {
            $model->parameterGroups = parameterGroups::fromMap($map['ParameterGroups']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignalForOptimizeParams'])) {
            $model->signalForOptimizeParams = $map['SignalForOptimizeParams'];
        }

        return $model;
    }
}
