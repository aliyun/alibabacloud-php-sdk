<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateActivationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $activationId;

    /**
     * @var string
     */
    public $activationCode;
    protected $_name = [
        'requestId'      => 'RequestId',
        'activationId'   => 'ActivationId',
        'activationCode' => 'ActivationCode',
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
        if (null !== $this->activationId) {
            $res['ActivationId'] = $this->activationId;
        }
        if (null !== $this->activationCode) {
            $res['ActivationCode'] = $this->activationCode;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ActivationId'])) {
            $model->activationId = $map['ActivationId'];
        }
        if (isset($map['ActivationCode'])) {
            $model->activationCode = $map['ActivationCode'];
        }

        return $model;
    }
}
