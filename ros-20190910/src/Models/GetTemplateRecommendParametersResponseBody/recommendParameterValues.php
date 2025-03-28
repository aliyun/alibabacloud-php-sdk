<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateRecommendParametersResponseBody;

use AlibabaCloud\Dara\Model;

class recommendParameterValues extends Model
{
    /**
     * @var string
     */
    public $parameterKey;

    /**
     * @var string
     */
    public $recommendValue;
    protected $_name = [
        'parameterKey' => 'ParameterKey',
        'recommendValue' => 'RecommendValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterKey) {
            $res['ParameterKey'] = $this->parameterKey;
        }

        if (null !== $this->recommendValue) {
            $res['RecommendValue'] = $this->recommendValue;
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
        if (isset($map['ParameterKey'])) {
            $model->parameterKey = $map['ParameterKey'];
        }

        if (isset($map['RecommendValue'])) {
            $model->recommendValue = $map['RecommendValue'];
        }

        return $model;
    }
}
