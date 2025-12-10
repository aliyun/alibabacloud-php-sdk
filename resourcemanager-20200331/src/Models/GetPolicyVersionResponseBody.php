<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetPolicyVersionResponseBody\policyVersion;

class GetPolicyVersionResponseBody extends Model
{
    /**
     * @var policyVersion
     */
    public $policyVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyVersion' => 'PolicyVersion',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->policyVersion) {
            $this->policyVersion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = null !== $this->policyVersion ? $this->policyVersion->toArray($noStream) : $this->policyVersion;
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
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = policyVersion::fromMap($map['PolicyVersion']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
