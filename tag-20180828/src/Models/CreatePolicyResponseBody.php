<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Tea\Model;

class CreatePolicyResponseBody extends Model
{
    /**
     * @description The ID of the tag policy.
     *
     * @example p-5732750813924f90****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The ID of the request.
     *
     * @example FDBE270D-C491-5EEC-A5CD-98245422D3F7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyId'  => 'PolicyId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
