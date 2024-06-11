<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyResponseBody\defaultPolicyVersion;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyResponseBody\policy;
use AlibabaCloud\Tea\Model;

class GetPolicyResponseBody extends Model
{
    /**
     * @description The information of the default policy version.
     *
     * @var defaultPolicyVersion
     */
    public $defaultPolicyVersion;

    /**
     * @description The basic information of the policy.
     *
     * @var policy
     */
    public $policy;

    /**
     * @description The ID of the request.
     *
     * @example 697852FB-50D7-44D9-9774-530C31EAC572
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'defaultPolicyVersion' => 'DefaultPolicyVersion',
        'policy'               => 'Policy',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultPolicyVersion) {
            $res['DefaultPolicyVersion'] = null !== $this->defaultPolicyVersion ? $this->defaultPolicyVersion->toMap() : null;
        }
        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultPolicyVersion'])) {
            $model->defaultPolicyVersion = defaultPolicyVersion::fromMap($map['DefaultPolicyVersion']);
        }
        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
