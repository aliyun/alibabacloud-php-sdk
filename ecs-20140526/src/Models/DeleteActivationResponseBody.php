<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteActivationResponseBody\activation;

class DeleteActivationResponseBody extends Model
{
    /**
     * @var activation
     */
    public $activation;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'activation' => 'Activation',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->activation) {
            $this->activation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activation) {
            $res['Activation'] = null !== $this->activation ? $this->activation->toArray($noStream) : $this->activation;
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
        if (isset($map['Activation'])) {
            $model->activation = activation::fromMap($map['Activation']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
