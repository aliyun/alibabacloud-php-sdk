<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class EcologyOpennessSendVerificationCodeRequest extends Model
{
    /**
     * @example 18612345678
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example +86
     *
     * @var string
     */
    public $region;

    /**
     * @example dbe2eb4458302b9246c6da17fbc95f4b
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'phoneNumber' => 'PhoneNumber',
        'region'      => 'Region',
        'sessionId'   => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EcologyOpennessSendVerificationCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
