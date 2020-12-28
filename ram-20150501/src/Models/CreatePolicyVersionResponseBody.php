<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\CreatePolicyVersionResponseBody\policyVersion;
use AlibabaCloud\Tea\Model;

class CreatePolicyVersionResponseBody extends Model
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
     * @return CreatePolicyVersionResponseBody
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
