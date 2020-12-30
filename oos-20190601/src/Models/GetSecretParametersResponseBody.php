<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParametersResponseBody\parameters;
use AlibabaCloud\Tea\Model;

class GetSecretParametersResponseBody extends Model
{
    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $invalidParameters;
    protected $_name = [
        'parameters'        => 'Parameters',
        'requestId'         => 'RequestId',
        'invalidParameters' => 'InvalidParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->invalidParameters) {
            $res['InvalidParameters'] = $this->invalidParameters;
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
        if (isset($map['InvalidParameters'])) {
            if (!empty($map['InvalidParameters'])) {
                $model->invalidParameters = $map['InvalidParameters'];
            }
        }

        return $model;
    }
}
