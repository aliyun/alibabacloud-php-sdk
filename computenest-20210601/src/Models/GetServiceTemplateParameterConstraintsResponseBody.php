<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceTemplateParameterConstraintsResponseBody\parameterConstraints;
use AlibabaCloud\Tea\Model;

class GetServiceTemplateParameterConstraintsResponseBody extends Model
{
    /**
     * @description The package family constraints.
     *
     * @var string[]
     */
    public $familyConstraints;

    /**
     * @description The constraints on the parameters.
     *
     * @var parameterConstraints[]
     */
    public $parameterConstraints;

    /**
     * @description The request ID.
     *
     * @example 449DC03D-A039-56A6-8D6F-6EBCCCE0EE2C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'familyConstraints'    => 'FamilyConstraints',
        'parameterConstraints' => 'ParameterConstraints',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->familyConstraints) {
            $res['FamilyConstraints'] = $this->familyConstraints;
        }
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
     * @return GetServiceTemplateParameterConstraintsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FamilyConstraints'])) {
            if (!empty($map['FamilyConstraints'])) {
                $model->familyConstraints = $map['FamilyConstraints'];
            }
        }
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
