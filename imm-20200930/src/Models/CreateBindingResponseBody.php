<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateBindingResponseBody extends Model
{
    /**
     * @var Binding
     */
    public $binding;

    /**
     * @example 5F74C5C9-5AC0-49F9-914D-E01589D3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'binding'   => 'Binding',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->binding) {
            $res['Binding'] = null !== $this->binding ? $this->binding->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Binding'])) {
            $model->binding = Binding::fromMap($map['Binding']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
