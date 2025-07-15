<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParameterResponseBody\parameter;
use AlibabaCloud\Tea\Model;

class GetSecretParameterResponseBody extends Model
{
    /**
     * @description The information about the encryption parameter.
     *
     * @var parameter
     */
    public $parameter;

    /**
     * @description The ID of the request.
     *
     * @example 7F14FB7C-C9BE-44AE-92ED-21ACC02FBFD2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameter' => 'Parameter',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return GetSecretParameterResponseBody
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
