<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DisableActivationResponseBody\activation;
use AlibabaCloud\Tea\Model;

class DisableActivationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var activation
     */
    public $activation;
    protected $_name = [
        'requestId'  => 'RequestId',
        'activation' => 'Activation',
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
        if (null !== $this->activation) {
            $res['Activation'] = null !== $this->activation ? $this->activation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableActivationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Activation'])) {
            $model->activation = activation::fromMap($map['Activation']);
        }

        return $model;
    }
}
