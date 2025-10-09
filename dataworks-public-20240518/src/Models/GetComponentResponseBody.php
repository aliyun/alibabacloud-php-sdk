<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetComponentResponseBody\component;

class GetComponentResponseBody extends Model
{
    /**
     * @var component
     */
    public $component;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'component' => 'Component',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->component) {
            $this->component->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->component) {
            $res['Component'] = null !== $this->component ? $this->component->toArray($noStream) : $this->component;
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
        if (isset($map['Component'])) {
            $model->component = component::fromMap($map['Component']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
