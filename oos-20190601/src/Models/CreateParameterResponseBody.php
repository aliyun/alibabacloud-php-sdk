<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\CreateParameterResponseBody\parameter;
use AlibabaCloud\Tea\Model;

class CreateParameterResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var parameter
     */
    public $parameter;
    protected $_name = [
        'requestId' => 'RequestId',
        'parameter' => 'Parameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->parameter) {
            $res['Parameter'] = null !== $this->parameter ? $this->parameter->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Parameter'])) {
            $model->parameter = parameter::fromMap($map['Parameter']);
        }

        return $model;
    }
}
