<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetBindingResponseBody extends Model
{
    /**
     * @description The binding relationship.
     *
     * @var Binding
     */
    public $binding;

    /**
     * @description The request ID.
     *
     * @example AEFCD467-C928-4A36-951A-6EB5A592****
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
     * @return GetBindingResponseBody
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
