<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\GetAuthenticatorResponseBody\authenticator;
use AlibabaCloud\Tea\Model;

class GetAuthenticatorResponseBody extends Model
{
    /**
     * @var authenticator
     */
    public $authenticator;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authenticator' => 'Authenticator',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticator) {
            $res['Authenticator'] = null !== $this->authenticator ? $this->authenticator->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuthenticatorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authenticator'])) {
            $model->authenticator = authenticator::fromMap($map['Authenticator']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
