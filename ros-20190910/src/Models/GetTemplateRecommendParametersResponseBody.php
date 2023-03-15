<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateRecommendParametersResponseBody\recommendParameterValues;
use AlibabaCloud\Tea\Model;

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
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendParameterValues) {
            $res['RecommendParameterValues'] = [];
            if (null !== $this->recommendParameterValues && \is_array($this->recommendParameterValues)) {
                $n = 0;
                foreach ($this->recommendParameterValues as $item) {
                    $res['RecommendParameterValues'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetTemplateRecommendParametersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendParameterValues'])) {
            if (!empty($map['RecommendParameterValues'])) {
                $model->recommendParameterValues = [];
                $n                               = 0;
                foreach ($map['RecommendParameterValues'] as $item) {
                    $model->recommendParameterValues[$n++] = null !== $item ? recommendParameterValues::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
