<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\CreateParameterResponseBody\parameter;
use AlibabaCloud\Tea\Model;

class CreateParameterResponseBody extends Model
{
    /**
     * @description The information about the common parameter.
     *
     * @var parameter
     */
    public $parameter;

    /**
     * @description The ID of the request.
     *
     * @example 0B419FF3-ABC6-4DF0-95E5-636DC8CBB8AF
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
     * @return CreateParameterResponseBody
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
