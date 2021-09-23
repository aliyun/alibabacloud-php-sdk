<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateBindingResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var Binding
     */
    public $binding;
    protected $_name = [
        'requestId' => 'RequestId',
        'binding'   => 'Binding',
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
        if (null !== $this->binding) {
            $res['Binding'] = null !== $this->binding ? $this->binding->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBindingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Binding'])) {
            $model->binding = Binding::fromMap($map['Binding']);
        }

        return $model;
    }
}
