<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class GetBindingResponseBody extends Model
{
    /**
     * @var Binding
     */
    public $binding;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'binding' => 'Binding',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->binding) {
            $this->binding->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->binding) {
            $res['Binding'] = null !== $this->binding ? $this->binding->toArray($noStream) : $this->binding;
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
        if (isset($map['Binding'])) {
            $model->binding = Binding::fromMap($map['Binding']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
