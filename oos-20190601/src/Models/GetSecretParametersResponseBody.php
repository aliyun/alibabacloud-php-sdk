<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParametersResponseBody\parameters;
use AlibabaCloud\Tea\Model;

class GetSecretParametersResponseBody extends Model
{
    /**
     * @description Invalid encryption parameter.
     *
     * @var string[]
     */
    public $invalidParameters;

    /**
     * @description The information about the encryption parameter.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The ID of the request.
     *
     * @example A5320F1D-92D9-44BB-A416-5FC525ED6D57
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invalidParameters' => 'InvalidParameters',
        'parameters'        => 'Parameters',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidParameters) {
            $res['InvalidParameters'] = $this->invalidParameters;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetSecretParametersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvalidParameters'])) {
            if (!empty($map['InvalidParameters'])) {
                $model->invalidParameters = $map['InvalidParameters'];
            }
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
