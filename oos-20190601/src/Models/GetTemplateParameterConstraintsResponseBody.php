<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateParameterConstraintsResponseBody extends Model
{
    /**
     * @description The constraints of the parameters.
     *
     * @example [
     * ]
     * @var mixed[]
     */
    public $parameterConstraints;

    /**
     * @description The request ID.
     *
     * @example CBEC8072-BEC2-478E-8EAE-E723BA79CF19
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
            $res['ParameterConstraints'] = $this->parameterConstraints;
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
            $model->parameterConstraints = $map['ParameterConstraints'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
