<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\SDK\Oosops\V20190601\Models\UpdatePublicParameterResponseBody\parameter;
use AlibabaCloud\Tea\Model;

class UpdatePublicParameterResponseBody extends Model
{
    /**
     * @var parameter
     */
    public $parameter;

    /**
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
     * @return UpdatePublicParameterResponseBody
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
