<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class CreateActivationResponseBody extends Model
{
    /**
     * @var string
     */
    public $activationCode;
    /**
     * @var string
     */
    public $activationId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
