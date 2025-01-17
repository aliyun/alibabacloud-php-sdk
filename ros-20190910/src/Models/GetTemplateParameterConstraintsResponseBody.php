<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponseBody\parameterConstraints;

class GetTemplateParameterConstraintsResponseBody extends Model
{
    /**
     * @var parameterConstraints[]
     */
    public $parameterConstraints;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameterConstraints' => 'ParameterConstraints',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->parameterConstraints)) {
            Model::validateArray($this->parameterConstraints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterConstraints) {
            if (\is_array($this->parameterConstraints)) {
                $res['ParameterConstraints'] = [];
                $n1                          = 0;
                foreach ($this->parameterConstraints as $item1) {
                    $res['ParameterConstraints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ParameterConstraints'])) {
            if (!empty($map['ParameterConstraints'])) {
                $model->parameterConstraints = [];
                $n1                          = 0;
                foreach ($map['ParameterConstraints'] as $item1) {
                    $model->parameterConstraints[$n1++] = parameterConstraints::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
