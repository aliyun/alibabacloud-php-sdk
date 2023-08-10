<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationClientSecretResponseBody\applicationClientSecret;
use AlibabaCloud\Tea\Model;

class CreateApplicationClientSecretResponseBody extends Model
{
    /**
     * @description The information about the client key.
     *
     * @var applicationClientSecret
     */
    public $applicationClientSecret;

    /**
     * @description The ID of the request.
     *
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationClientSecret' => 'ApplicationClientSecret',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationClientSecret) {
            $res['ApplicationClientSecret'] = null !== $this->applicationClientSecret ? $this->applicationClientSecret->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationClientSecretResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationClientSecret'])) {
            $model->applicationClientSecret = applicationClientSecret::fromMap($map['ApplicationClientSecret']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
