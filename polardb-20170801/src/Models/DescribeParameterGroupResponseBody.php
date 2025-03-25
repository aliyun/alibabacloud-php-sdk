<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeParameterGroupResponseBody\parameterGroup;

class DescribeParameterGroupResponseBody extends Model
{
    /**
     * @var parameterGroup[]
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
        if (\is_array($this->parameterGroup)) {
            Model::validateArray($this->parameterGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterGroup) {
            if (\is_array($this->parameterGroup)) {
                $res['ParameterGroup'] = [];
                $n1 = 0;
                foreach ($this->parameterGroup as $item1) {
                    $res['ParameterGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['ParameterGroup'])) {
                $model->parameterGroup = [];
                $n1 = 0;
                foreach ($map['ParameterGroup'] as $item1) {
                    $model->parameterGroup[$n1++] = parameterGroup::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
