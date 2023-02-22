<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetPolicyVersionResponseBody\policyVersion;
use AlibabaCloud\Tea\Model;

class GetPolicyVersionResponseBody extends Model
{
    /**
     * @var policyVersion
     */
    public $policyVersion;

    /**
     * @example 9B34724D-54B0-4A51-B34D-4512372FE1BE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyVersion' => 'PolicyVersion',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = null !== $this->policyVersion ? $this->policyVersion->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPolicyVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = policyVersion::fromMap($map['PolicyVersion']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
