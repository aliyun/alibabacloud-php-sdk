<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyResponseBody\defaultPolicyVersion;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetPolicyResponseBody\policy;

class GetPolicyResponseBody extends Model
{
    /**
     * @var defaultPolicyVersion
     */
    public $defaultPolicyVersion;

    /**
     * @var policy
     */
    public $policy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'defaultPolicyVersion' => 'DefaultPolicyVersion',
        'policy' => 'Policy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->defaultPolicyVersion) {
            $this->defaultPolicyVersion->validate();
        }
        if (null !== $this->policy) {
            $this->policy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultPolicyVersion) {
            $res['DefaultPolicyVersion'] = null !== $this->defaultPolicyVersion ? $this->defaultPolicyVersion->toArray($noStream) : $this->defaultPolicyVersion;
        }

        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toArray($noStream) : $this->policy;
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
