<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class GetTemplateParameterConstraintsResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $parameterConstraints;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameterConstraints' => 'ParameterConstraints',
        'requestId' => 'RequestId',
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
                foreach ($this->parameterConstraints as $key1 => $value1) {
                    $res['ParameterConstraints'][$key1] = $value1;
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
                foreach ($map['ParameterConstraints'] as $key1 => $value1) {
                    $model->parameterConstraints[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
