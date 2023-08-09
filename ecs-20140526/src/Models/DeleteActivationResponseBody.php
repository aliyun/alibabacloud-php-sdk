<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteActivationResponseBody\activation;
use AlibabaCloud\Tea\Model;

class DeleteActivationResponseBody extends Model
{
    /**
     * @description The time when the activation code was created.
     *
     * @var activation
     */
    public $activation;

    /**
     * @description Details of the activation code and its usage information.
     *
     * @example 4ECEEE12-56F1-4FBC-9AB1-890F74942176
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'activation' => 'Activation',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activation) {
            $res['Activation'] = null !== $this->activation ? $this->activation->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteActivationResponseBody
     */
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
