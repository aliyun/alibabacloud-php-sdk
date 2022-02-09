<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupResponseBody\parameterGroup;
use AlibabaCloud\Tea\Model;

class DescribeParameterGroupResponseBody extends Model
{
    /**
     * @var parameterGroup[]
     */
    public $parameterGroup;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameterGroup' => 'ParameterGroup',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterGroup) {
            $res['ParameterGroup'] = [];
            if (null !== $this->parameterGroup && \is_array($this->parameterGroup)) {
                $n = 0;
                foreach ($this->parameterGroup as $item) {
                    $res['ParameterGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParameterGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterGroup'])) {
            if (!empty($map['ParameterGroup'])) {
                $model->parameterGroup = [];
                $n                     = 0;
                foreach ($map['ParameterGroup'] as $item) {
                    $model->parameterGroup[$n++] = null !== $item ? parameterGroup::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
