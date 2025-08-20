<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateRecommendParametersResponseBody\recommendParameterValues;

class GetTemplateRecommendParametersResponseBody extends Model
{
    /**
     * @var recommendParameterValues[]
     */
    public $recommendParameterValues;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recommendParameterValues' => 'RecommendParameterValues',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->recommendParameterValues)) {
            Model::validateArray($this->recommendParameterValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recommendParameterValues) {
            if (\is_array($this->recommendParameterValues)) {
                $res['RecommendParameterValues'] = [];
                $n1 = 0;
                foreach ($this->recommendParameterValues as $item1) {
                    $res['RecommendParameterValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RecommendParameterValues'])) {
            if (!empty($map['RecommendParameterValues'])) {
                $model->recommendParameterValues = [];
                $n1 = 0;
                foreach ($map['RecommendParameterValues'] as $item1) {
                    $model->recommendParameterValues[$n1] = recommendParameterValues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
