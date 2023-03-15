<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateRecommendParametersResponseBody;

use AlibabaCloud\Tea\Model;

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
        'parameterKey'   => 'ParameterKey',
        'recommendValue' => 'RecommendValue',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return recommendParameterValues
     */
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
