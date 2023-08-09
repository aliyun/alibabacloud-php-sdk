<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateActivationResponseBody extends Model
{
    /**
     * @description The value of the activation code. The value is returned only once after the CreateActivation operation is called and cannot be subsequently queried. Make sure that you properly save the return value.
     *
     * @example a-hz0ch3SwhOlE1234+Xo32lAZC****
     *
     * @var string
     */
    public $activationCode;

    /**
     * @description The ID of the activation code.
     *
     * @example 4ECEEE12-56F1-4FBC-9AB1-890F1234****
     *
     * @var string
     */
    public $activationId;

    /**
     * @description The request ID.
     *
     * @example 4ECEEE12-56F1-4FBC-9AB1-890F1234****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'activationCode' => 'ActivationCode',
        'activationId'   => 'ActivationId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activationCode) {
            $res['ActivationCode'] = $this->activationCode;
        }
        if (null !== $this->activationId) {
            $res['ActivationId'] = $this->activationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateActivationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivationCode'])) {
            $model->activationCode = $map['ActivationCode'];
        }
        if (isset($map['ActivationId'])) {
            $model->activationId = $map['ActivationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
