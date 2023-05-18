<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\CreateControlPolicyResponseBody\controlPolicy;
use AlibabaCloud\Tea\Model;

class CreateControlPolicyResponseBody extends Model
{
    /**
     * @description The details of the access control policy.
     *
     * @var controlPolicy
     */
    public $controlPolicy;

    /**
     * @description The ID of the request.
     *
     * @example 776B05B3-A0B0-464B-A191-F4E1119A94B2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'controlPolicy' => 'ControlPolicy',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlPolicy) {
            $res['ControlPolicy'] = null !== $this->controlPolicy ? $this->controlPolicy->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateControlPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlPolicy'])) {
            $model->controlPolicy = controlPolicy::fromMap($map['ControlPolicy']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
