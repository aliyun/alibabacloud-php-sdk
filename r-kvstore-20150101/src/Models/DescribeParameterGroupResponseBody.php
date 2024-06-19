<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupResponseBody\parameterGroup;
use AlibabaCloud\Tea\Model;

class DescribeParameterGroupResponseBody extends Model
{
    /**
     * @description The information about the parameter template.
     *
     * @var parameterGroup
     */
    public $parameterGroup;

    /**
     * @description The request ID.
     *
     * @example A501A191-BD70-5E50-98A9-C2A486A82****
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
            $res['ParameterGroup'] = null !== $this->parameterGroup ? $this->parameterGroup->toMap() : null;
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
            $model->parameterGroup = parameterGroup::fromMap($map['ParameterGroup']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
