<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetParameterResponseBody\parameter;
use AlibabaCloud\Tea\Model;

class GetParameterResponseBody extends Model
{
    /**
     * @description The description of the common parameter.
     *
     * @var parameter
     */
    public $parameter;

    /**
     * @description The user who updated the common parameter.
     *
     * @example BA326372-2A10-4C3B-BE3E-6439DB7557CC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameter' => 'Parameter',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameter) {
            $res['Parameter'] = null !== $this->parameter ? $this->parameter->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetParameterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Parameter'])) {
            $model->parameter = parameter::fromMap($map['Parameter']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
