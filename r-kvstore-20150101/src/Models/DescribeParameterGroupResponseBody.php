<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupResponseBody\parameterGroup;

class DescribeParameterGroupResponseBody extends Model
{
    /**
     * @var parameterGroup
     */
    public $parameterGroup;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameterGroup' => 'ParameterGroup',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->parameterGroup) {
            $this->parameterGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterGroup) {
            $res['ParameterGroup'] = null !== $this->parameterGroup ? $this->parameterGroup->toArray($noStream) : $this->parameterGroup;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ParameterGroup'])) {
            $model->parameterGroup = parameterGroup::fromMap($map['ParameterGroup']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
