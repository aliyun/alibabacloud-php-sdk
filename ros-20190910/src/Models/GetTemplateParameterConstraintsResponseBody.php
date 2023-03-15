<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetTemplateParameterConstraintsResponseBody\parameterConstraints;
use AlibabaCloud\Tea\Model;

class GetTemplateParameterConstraintsResponseBody extends Model
{
    /**
     * @description The constraints of the parameters.
     *
     * @var parameterConstraints[]
     */
    public $parameterConstraints;

    /**
     * @description The ID of the request.
     *
     * @example 9816785B-BCF8-514D-8B76-C1EC2BC954FC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameterConstraints' => 'ParameterConstraints',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterConstraints) {
            $res['ParameterConstraints'] = [];
            if (null !== $this->parameterConstraints && \is_array($this->parameterConstraints)) {
                $n = 0;
                foreach ($this->parameterConstraints as $item) {
                    $res['ParameterConstraints'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetTemplateParameterConstraintsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterConstraints'])) {
            if (!empty($map['ParameterConstraints'])) {
                $model->parameterConstraints = [];
                $n                           = 0;
                foreach ($map['ParameterConstraints'] as $item) {
                    $model->parameterConstraints[$n++] = null !== $item ? parameterConstraints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
