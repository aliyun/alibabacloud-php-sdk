<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oosops\V20190601\Models\UpdatePublicParameterResponseBody\parameter;

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
        if (null !== $this->parameter) {
            $this->parameter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameter) {
            $res['Parameter'] = null !== $this->parameter ? $this->parameter->toArray($noStream) : $this->parameter;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
